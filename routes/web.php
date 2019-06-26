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
 
Route::get('/peserta', 'PesertaController@index');
Route::post('/peserta/create', 'PesertaController@create');
Route::get('/peserta/show', 'PesertaController@show');
Route::get('/peserta/store', 'PesertaController@store');
Route::get('/peserta/{id}/edit', 'PesertaController@edit');
Route::get('/peserta/{id}/update', 'PesertaController@update');
Route::get('/peserta/{id}/hapus', 'PesertaController@destroy');

Route::get('/panitia', 'PanitiaController@index');
Route::post('/panitia/create', 'PanitiaController@create');
Route::get('/panitia/show', 'PanitiaController@show');
Route::get('/peserta/store', 'PanitiaController@store');
Route::get('/peserta/{id}/edit', 'PanitiaController@edit');
Route::get('/peserta/{id}/update', 'PanitiaController@update');
Route::get('/peserta/{id}/hapus', 'PanitiaController@destroy');
