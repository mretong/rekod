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
Route::resource('bicara','PerbicaraanController');

/*
|#######################################|
|				Borang H               #|
|#######################################|
*/
Route::resource('borangh','BorangHController');

/*
|#######################################|
|				Borang K               #|
|#######################################|
*/
Route::resource('borangk','BorangKController');

/*
|#######################################|
|				Aduan                  #|
|#######################################|
*/
Route::resource('aduan','AduanController');

/*
|#######################################|
|				Settings               #|
|#######################################|
*/
Route::resource('setting','SettingController');

/*
|#######################################|
|				Negeri                 #|
|#######################################|
*/
Route::resource('negeri','NegeriController');

/*
|#######################################|
|				Daerah                 #|
|#######################################|
*/
Route::resource('daerah','DaerahController');

/*
|#######################################|
|				Lokaliti               #|
|#######################################|
*/
Route::resource('lokaliti','LokalitiController');

/*
|#######################################|
|				Pakej                  #|
|#######################################|
*/
Route::resource('pakej','PakejController');

/*
|#######################################|
|				Fasa                   #|
|#######################################|
*/
Route::resource('fasa','FasaController');

/*
|#######################################|
|				Staff                  #|
|#######################################|
*/
Route::resource('staff','StaffController');

/*
|#######################################|
|				Bank                   #|
|#######################################|
*/
Route::resource('bank','BankController');

/*
|#######################################|
|				Blok                   #|
|#######################################|
*/
Route::resource('blok','BlokController');

/*
|#######################################|
|				Mukim                  #|
|#######################################|
*/
Route::resource('mukim','MukimController');

/*
|#######################################|
|				Wilayah                #|
|#######################################|
*/
Route::resource('wilayah','WilayahController');

/*
|#######################################|
|				Lot                    #|
|#######################################|
*/
Route::resource('lot','LotController');

/*
|#######################################|
|			status_tanah               #|
|#######################################|
*/
Route::resource('tanah','StatusTanahController');

/*
|#######################################|
|			status_bicara              #|
|#######################################|
*/
Route::resource('status_bicara','StatusBicaraController');

/*
|#######################################|
|			status_aduan               #|
|#######################################|
*/
Route::resource('status_aduan','StatusAduanController');

/*
|#######################################|
|			kategori_pampasan          #|
|#######################################|
*/
Route::resource('kategori','KategoriPampasanController');

/*
|#######################################|
|			pembayaran                 #|
|#######################################|
*/
Route::resource('pembayaran','PembayaranController');

/*
|#######################################|
|			pembayaran                 #|
|#######################################|
*/
Route::resource('status_pembayaran','StatusPembayaranController');

/*
|#######################################|
|			kaedah_bayar               #|
|#######################################|
*/
Route::resource('kaedah_pembayaran','KaedahPembayaranController');