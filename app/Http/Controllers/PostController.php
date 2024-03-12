<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){    
        return view ('posts', [
            "tittle"=> "Posts",
            "active"=> "posts",
            // Menampilkan semua data dari database
            // "posts"=> Post::all()
            // Menampilkan data berdasarkan postingan terbaru
            'posts' => Post::latest()->filter(request(['search']))->get()
        ]);
    }
    public function show(Post $post){
        
        return view('post', [
            "tittle"=>"Single Post",
            "active"=> "posts",
            "post"=> $post
        ]);
    }
}