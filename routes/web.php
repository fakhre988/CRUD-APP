<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users','UsersController@index');

Route::get('/users/{user}','UsersController@show');

Route::get('/new-user','UsersController@create');

Route::post('store-user','UsersController@store');

Route::get('/users/{user}/edit','UsersController@edit');

Route::post('/users/{user}/update-user','UsersController@update');

Route::get('/users/{user}/delete','UsersController@destroy');


