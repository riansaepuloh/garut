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
Route::get('/forget', 'Auth\LoginController@forget')->name('home');
Route::get('/forget/reset', 'Auth\LoginController@reset')->name('home');

// CRUD KECAMATAN
Route::get('/kecamatan', 'KecamatanController@index')->name('kecamatan');
Route::get('/kecamatan/create', 'KecamatanController@create')->name('kecamatan.create');
Route::post('/kecamatan/create', 'KecamatanController@store')->name('kecamatan.store');
Route::get('/kecamatan/{id}/edit', 'KecamatanController@edit')->name('kecamatan.edit');
Route::patch('/kecamatan/{id}/edit', 'KecamatanController@update')->name('kecamatan.update');
Route::delete('/kecamatan/{id}/delete', 'KecamatanController@destroy')->name('kecamatan.destroy');

// CRUD DESA 
Route::get('/desa', 'DesaController@index')->name('desa');
Route::get('/desa/create', 'DesaController@create')->name('desa.create');
Route::post('/desa/create', 'DesaController@store')->name('desa.store');
Route::get('/desa/{id}/edit', 'DesaController@edit')->name('desa.edit');
Route::patch('/desa/{id}/edit', 'DesaController@update')->name('desa.update');
Route::delete('/desa/{id}/delete', 'DesaController@destroy')->name('desa.destroy');