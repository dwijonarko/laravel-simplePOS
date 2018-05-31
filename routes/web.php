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
Route::middleware(['auth', 'check-permission:admin|superadmin|user'])->group(function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('penjualans', 'PenjualanController');
    Route::get('barang/{id}', 'BarangController@search');
});


Route::middleware(['auth', 'check-permission:admin|superadmin'])->group(function () {
    Route::resource('kategoris', 'KategoriController');
    Route::resource('barangs', 'BarangController');
    Route::resource('agamas', 'AgamaController');
    Route::resource('pelanggans', 'PelangganController');
    Route::resource('pegawais', 'PegawaiController');
    Route::resource('/users', 'UserController');
});


Route::resource('users', 'UserController');