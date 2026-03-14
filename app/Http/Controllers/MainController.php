<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Movie;

class MainController extends BaseController
{

public function home(){

    if(!Session::get('user_id')){
          return redirect('login');
    }

    return view('home');
}

public function searchMovie($q){

    $curl = curl_init();
    $query=urlencode($q);
    curl_setopt_array($curl, [
         CURLOPT_URL => "https://streaming-availability.p.rapidapi.com/v2/search/title?title=".$query."&country=us",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET",
         CURLOPT_HTTPHEADER => [
             "X-RapidAPI-Host: streaming-availability.p.rapidapi.com",
             "X-RapidAPI-Key: a658a07c6amsh4392743ea81dfe3p1bb445jsnc2875fc0fd50"
         ],
     ]);
     
     $response = curl_exec($curl);
     curl_close($curl);
     echo $response;
}

public function addWatchlist(){

    if(!Session::get('user_id'))
    {
        return redirect('login');
    }
    
$user_id=Session::get('user_id');

//Verifico se il film è già presente nella watchlist

$user=User::find($user_id);
if($user->movies()->where('id',request('id'))->first()){

return [ 'exists'=> false];
}

//Aggiungo il film alla Watchlist

$movie = new Movie;
$movie->id=request('id');
$movie->user_id=$user_id;
$movie->title=request('title');
$movie->poster=request('poster');
$movie->save();
return ['exists'=> true];

}

public function deleteMovie($id){

 //Check sessione
if(!Session::get('user_id'))
    {
          return redirect('login');
    }

$movie=Movie::find($id);

$movie->delete();
return [ "exists"=> true];
}

public function movies(){
if(!Session::get('user_id')){
    return redirect('home');
}
return User::find(Session::get('user_id'))->movies;
}

public function upcoming(){

    if(!Session::get('user_id'))
    {
        return redirect('login');
    }

    $user = User::find(Session::get('user_id'));
    return view('upcoming')->with('username', $user->username);


}

public function account(){

    if(!Session::get('user_id'))
    {
        return redirect('login');
    }

    $user = User::find(Session::get('user_id'));
    return view('account')->with('user_id',$user->id);
}

}