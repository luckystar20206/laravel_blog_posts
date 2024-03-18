<?php

use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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
// Route Halaman Home
Route::get('/', function () {
    return view('home', [
        "tittle"=> "Home",
        "active" => "home"
    ]);
});

// Route Halaman About
Route::get('/about',function(){
    return view('about', 
    [
        "active"=>"about",
        "tittle"=> "About",
        "name"=>"Rangga Saputra",
        "email"=>"ranggasaputra@gmail.com",
        "image"=>"1.png",
        "alt"=>"profile",
    ]);
});

// Route Halaman Posts
Route::get('/posts', [PostController::class , 'index']);

// Route Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route Mendapatkan halaman categories
Route::get('/categories', function(){
    return view ('categories',[
        "tittle" => "Categories",
        "active" => "categories",
        "categories" => Category::all(),
    ]);
});


// Route Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route Halaman Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route Halaman Dashboard
Route::get('/dashboard', function(){
    return view ('dashboard.index');
})->middleware('auth');



