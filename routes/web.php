<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return redirect('login');
});


//Route del LoginController
Route::get('login','\App\Http\Controllers\LoginController@login');
Route::post('login','\App\Http\Controllers\LoginController@err_login');
Route::get('subscribe','\App\Http\Controllers\LoginController@subscribe');
Route::post('subscribe','\App\Http\Controllers\LoginController@err_sub');
Route::get('logout','\App\Http\Controllers\LoginController@logout');
Route::get('verify_user/{username}','\App\Http\Controllers\LoginController@verify_user');
Route::get('verify_mail/{mail}','\App\Http\Controllers\LoginController@verify_mail');

//Route del MainController
Route::get('home','\App\Http\Controllers\MainController@home');
Route::get('searchMovie/{q}','App\Http\Controllers\MainController@searchMovie');
Route::post('addWatchlist','App\Http\Controllers\MainController@addWatchlist');
Route::get('deleteMovie/{id}','App\Http\Controllers\MainController@deleteMovie');
Route::get('movies','App\Http\Controllers\MainController@movies');
Route::get('upcoming', 'App\Http\Controllers\MainController@upcoming');
Route::get('account','App\Http\Controllers\MainController@account');


