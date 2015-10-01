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
// vamos con las vistas 
Route::get('/','FrontController@index');
Route::get('index','FrontController@index');
Route::get('contact','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');
// controller admin usuario
Route::resource('usuario','UsuarioController');
// login
Route::resource('log', 'LogController');
Route::get('logout','LogController@logout');