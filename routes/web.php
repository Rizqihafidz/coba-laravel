<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home",
        'active' => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => "about",
        "name" => "Desa Tumpakrejo",
        "email" => "aractorz123@gmail.com",
        "img" => "img/baldes.jpeg"
    ]);
});

Route::get('/visi', function () {
    return view('visi', [
        "title" => "About",
        'active' => "about",
        "name" => "Desa Tumpakrejo",
        "email" => "aractorz123@gmail.com",
        "img" => "img/baldes.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/galeri', [AlbumController::class, 'index']);
Route::get('/galeri/{album:slug}', [AlbumController::class, 'show']);

Route::get('/potensi', [PotensiController::class, 'index']);
Route::get('/potensi/{post:slug}', [PotensiController::class, 'show']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/{post:slug}', [ProdukController::class, 'show']);

Route::get('/program', [ProgramController::class, 'index']);
Route::get('/program/{post:slug}', [ProgramController::class, 'show']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{post:slug}', [BeritaController::class, 'show']);

Route::get('/aparatur', [AparaturController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
