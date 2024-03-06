<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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
    ]);
});

// Route Halaman About
Route::get('/about',function(){
    return view('about', 
    [
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

Route::get('/categories', function(){
    return view ('categories',[
        "tittle" => "Post Categories",
        "categories" => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        "tittle" => "Post By Category: $category->name",
        "posts" => $category->posts->load(['category', 'author']),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        "tittle" => "Post By: $author->name",
        "posts" => $author->posts->load(['category', 'author']),
    ]);
});
