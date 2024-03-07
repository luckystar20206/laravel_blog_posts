<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view ('posts', [
            "tittle"=> "All Posts",
            // Menampilkan semua data dari database
            // "posts"=> Post::all()
            // Menampilkan data berdasarkan postingan terbaru
            'posts' => Post::latest()->get()
        ]);
    }
    public function show(Post $post){
        
        return view('post', [
            "tittle"=>"Single Post",
            "post"=> $post
        ]);
    }
}