<?php

//use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

use Illuminate\Routing\Route;

Route::get('/',"StudentController@index");
Route::get('/edit/{id}', "StudentController@edit");
Route::get('/show/{id}', "StudentController@show");
Route::get('/create', "StudentController@create");
Route::get('/store', "StudentController@store");
Route::get('/update/{id}', "StudentController@update");

