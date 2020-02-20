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

Route::get('hi',function(){
    return "hi";
});

/*Route::get('user/{id}',function ($id=null) {
    return $id;
});*/

Route::get('sayhi','PageController@index');


Route::get('user/{id}','UserController@showUser');

Route::get('welcome','PageController@welcome');
