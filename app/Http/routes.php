<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::auth();// AuthControllerクラスへのroutingを定義

Route::resource('todo', 'TodoController');// index, create, storeなど良く使われるメソッドへのroutingを定義