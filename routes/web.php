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


Route::get('/kategorije','kategorijeController@ispisKategorija');
Route::get('/recepti','receptiController@ispisRecepata');
Route::get('/kuhari','ispisKuhara@ispisKuhara');
Route::get('/receptiKategorije/{kategorija_id}','receptiKategorijeController@receptiPoKategoriji');
Route::get('/mojiRecepti','mojiReceptiController@ispisMojihRecepata');
Route::get('/mojiRecepti/{za_izbrisati}','mojiReceptiController@brisanjeRecepta');
Route::get('/dodajRecept','dodajController@ispisKategorija');
Route::get('/dodajRecept1','dodajController@store');
Route::get('/urediRecepat/{za_urediti}','urediController@uredjivanjeRecepta');

















/*Route::get('recepti', function() {
    return view('recepti');
});
*/



Route::get('onama' , function(){
     return view('onama');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
