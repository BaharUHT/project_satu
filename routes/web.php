<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('karyawan');
});
Route::get('supplyer', 'App\Http\Controllers\SupplyerController@index');
Route::get('supplyer/tambah', 'App\Http\Controllers\SupplyerController@tambah');
Route::post('supplyer/tambah_proses', 'App\Http\Controllers\SupplyerController@tambah_proses');
Route::get('supplyer/edit/{id}', 'App\Http\Controllers\SupplyerController@edit');
Route::post('supplyer/edit_proses', 'App\Http\Controllers\SupplyerController@edit_proses');
Route::get('supplyer/delete/{id}', 'App\Http\Controllers\SupplyerController@delete');
Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');
Route::get('karyawan', 'App\Http\Controllers\karyawanController@index');
Route::get('karyawan/tambah', 'App\Http\Controllers\karyawanController@tambah');
Route::post('karyawan/tambah_proses', 'App\Http\Controllers\karyawanController@tambah_proses');
Route::get('karyawan/edit/{id}', 'App\Http\Controllers\karyawanController@edit');
Route::post('karyawan/edit_proses', 'App\Http\Controllers\karyawanController@edit_proses');
Route::get('karyawan/delete/{id}', 'App\Http\Controllers\karyawanController@delete');
