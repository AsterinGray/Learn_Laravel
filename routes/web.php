<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function(){
    return "Halo i'm here learning laravel";
});

Route::get('blog', function(){
    return view('blog');
});

Route::get('Test', 'TestController@index');

Route::get('/Test/{name}','TestController@index');

Route::get('/form', 'TestController@form');
Route::post('/form/process','TestController@process');