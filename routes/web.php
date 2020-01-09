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

//Inventaris
Route::get('/inventaris','InventarisController@index');
Route::post('/inventaris/create','InventarisController@create'); 
Route::get('/inventaris/{id_inventaris}/edit','InventarisController@edit');
Route::post('/inventaris/{$inventaris->id_inventaris}/update','InventarisController@update');
Route::get('/inventaris/{id_inventaris}/delete','InventarisController@delete');
Auth::routes();

//Peminjaman
Route::get('/peminjaman','PeminjamanController@index');
Route::post('/peminjaman/create','PeminjamanController@create'); 
Route::get('/peminjaman/{id_peminjaman}/edit','PeminjamanController@edit');
Route::post('/peminjaman/{$peminjaman->id_peminjaman}/update','PeminjamanController@update');
Route::get('/peminjaman/{id_peminjaman}/delete','PeminjamanController@delete');

//Pengembalian
Route::get('/pengembalian','PengembalianController@index');
Route::post('/pengembalian/create','PengembalianController@create'); 
Route::get('/pengembalian/{id_pengembalian}/edit','PengembalianController@edit');
Route::post('/pengembalian/{$pengembalian->id_pengembalian}/update','PengembalianController@update');
Route::get('/pengembalian/{id_pengembalian}/delete','PengembalianController@delete');

//Petugas
Route::get('/petugas','PetugasController@index');
Route::post('/petugas/create','PetugasController@create'); 
Route::get('/petugas/{id_petugas}/edit','PetugasController@edit');
Route::post('/petugas/{$petugas->id_petugas}/update','PetugasController@update');
Route::get('/petugas/{id_petugas}/delete','PetugasController@delete');


Route::get('/home', 'HomeController@index')->name('home');
