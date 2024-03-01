<?php

use App\Models\Post;
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
    return view('home', [
        "tittle"=> "Home",
    ]);
});

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

Route::get('/posts', function(){
    return view ('posts', [
        "tittle"=> "Posts",
        "posts"=> Post::all()
    ]);
});

// Halaman Single Post
Route::get('/posts/{slug}', function($slug){
    return view('post', [
        "tittle"=>"Single Post",
        "post"=> Post::find($slug)
    ]);
});
