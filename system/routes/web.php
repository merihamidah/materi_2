<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//parameters routing
Route::get('test/{produk}', [HomeController::class, 'test']);
Route::get('test-collection', [HomeController::class, 'testCollection']);

//prefix routing
Route::prefix('admin')->middleware('auth')->group(function(){
//resource routing
    Route::post('user/filter',[UserController::class, 'filter']);
    Route::post('kategori/filter',[KategoriController::class, 'filter']);    
    Route::post('produk/filter',[ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
});

Route::prefix('user')->group(function(){
    Route::post('client/filter',[ClientProdukController::class, 'filter']);
    Route::get('client', [ClientProdukController::class, 'index']);
    Route::get('client/{produk}', [ClientProdukController::class, 'show']);
});
//authetication
Route::get('loginp3', [AuthController::class, 'showLogin'])->name('login');
Route::post('loginp3', [AuthController::class, 'loginProcess']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegistration']);
Route::post('register', [AuthController::class, 'registerProcess']);