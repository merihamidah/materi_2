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
    return view("informatika");
});
Route::get('/agroindustri', function () {
    return view("agroindustri");});

Route::get('/sipil', function () {
    return view("sipil");

});
Route::get('/tambang', function () {
    return view("tambang");
});

Route::get('/mesin', function () {
    return view("mesin");

});
Route::get('/elektro', function () {
    return view("elektro");

});