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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|#######################################|
|				Warta                  #|
|#######################################|
*/
Route::resource('warta','WartaController');

/*
|#######################################|
|				Perbicaraan            #|
|#######################################|
*/
Route::resource('bicara','WartaController');

/*
|#######################################|
|				Borang H               #|
|#######################################|
*/
Route::resource('borangh','WartaController');

/*
|#######################################|
|				Borang K               #|
|#######################################|
*/
Route::resource('borangk','WartaController');

/*
|#######################################|
|				Settings               #|
|#######################################|
*/
Route::resource('setting','WartaController');