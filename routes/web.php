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
