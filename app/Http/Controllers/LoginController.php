<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends BaseController
{
    
//METODI PER IL LOGIN

public function login(){

    if(Session::get('user_id')){
        return redirect('home');
    }

    $error = Session::get('error');
    Session::forget('error');
    return view('login')->with('error',$error);
}

public function err_login(){

if(Session::get('user_id')){
    return redirect('home');
}

//Convalida dati
if(strlen(request('username')) == 0 || strlen(request('password')) == 0){

Session::put('error','empty');
return redirect('login')->withInput();
}

$user = User::where('username',request('username'))->first();

if(!$user || !password_verify(request('password'), $user->password)){
 
    Session::put('error','wrong_cred');
    return redirect('login')->withInput();


}
 //Effettua il login
    Session::put('user_id',$user->id);
    return redirect('home');
}


//METODI PER LA REGISTRAZIONE


public function verify_user($username){
    return ['exists' => User::where('username', $username)->first() !== null];
}

public function verify_mail($mail){
    return ['exists' => User::where('mail', $mail)->first() !== null];
}

public function subscribe() {

    if(Session::get('user_id')){
        return redirect('home');
    }
    $error=Session::get('error');
    Session::forget('error');
    return view('subscribe')->with('error',$error);
}

public function err_sub() {

    if(Session::get('user_id')){
        return redirect('home');
      }

      if(strlen(request('username')) == 0 || strlen(request('password')) == 0 )
      {
          Session::put('error', 'empty');
          return redirect('subscribe')->withInput();
      }
      else if(request('password') != request('conf_password'))
      {
          Session::put('error', 'wrong_pw');
          return redirect('subscribe')->withInput();
    
       }

    //Salvo l'utente
    $user=new User;
    $user->name=request('name');
    $user->username=request('username');
    $user->password=password_hash(request('password'),PASSWORD_BCRYPT);
    $user->mail=request('email');
    $user->save();
    Session::put('user_id',$user->id);
    return redirect('home');

    }

    public function logout(){
         
        Session::flush();
        return redirect('login');

    }



}





















