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
Route::get('/project2', function () {
    return view("project2");
});Route::get('/login', function () {
    return view("login");
});
Route::get('/wardahvelvet', function () {
    return view("wardahvelvet");
});
Route::get('/wardahliptint', function () {
    return view("wardahliptint");
});
Route::get('template', function(){
    return view('template.base');
});
Route::get('beranda', function(){
    return view('beranda');
});
Route::get('produk', function(){
    return view('produk');
});
Route::get('kategori', function(){
    return view('kategori');
});
Route::get('login2', function(){
    return view('login2');
});
Route::get('project3', function(){
    return view('project3.base');
});
Route::get('promo', function(){
    return view('promo');
});
Route::get('home', function(){
    return view('home');
});
Route::get('product', function(){
    return view('product');
});
Route::get('category', function(){
    return view('category');
});
Route::get('promo', function(){
    return view('promo');
});
Route::get('loginp3', function(){
    return view('loginp3');
});
Route::get('register', function(){
    return view('register');
});
Route::get('webtemplate', function(){
    return view('webtemplate');
});
Route::get('aboutus', function(){
    return view('aboutus');
});
Route::get('gallery', function(){
    return view('gallery');
});
Route::get('contact', function(){
    return view('contact');
});



