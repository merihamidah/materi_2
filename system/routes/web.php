<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

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
//project2
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
//project3 (menggunakan controller)
Route::get('project3', function(){
    return view('project3.base');
});

Route::get('home', [HomeController::class, 'showHome']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('webtemplate', [HomeController::class, 'showWebtemplate']);
Route::get('aboutus', [HomeController::class, 'showAboutUS']);
Route::get('gallery', [HomeController::class, 'showGallery']);
Route::get('contact', [HomeController::class, 'showContact']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('client', [ClientProdukController::class, 'index']);
Route::get('client/{produk}', [ClientProdukController::class, 'show']);

Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);
//authetication
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);


Route::get('loginp3', [AuthController::class, 'showLogin']);
Route::post('loginp3', [AuthController::class, 'loginProcess']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegistration']);
Route::post('register', [AuthController::class, 'registerProcess']);