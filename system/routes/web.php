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
Route::get('/informatika', function () {
    return "Saya Mahasiswa Informatika";
});
Route::get('/agroindutri', function () {
    return "Saya Mahasiswa Agroindutri";
});
Route::get('/sipil', function () {
    return "Saya Mahasiswa Teknik Sipil";
});
Route::get('/tambang', function () {
    return "Saya Mahasiswa Pertambangan";
});
Route::get('/mesin', function () {
    return "Saya Mahasiswa Teknik Mesin";
});
Route::get('/elektro', function () {
    return "Saya Mahasiswa Teknik Elektro";
});