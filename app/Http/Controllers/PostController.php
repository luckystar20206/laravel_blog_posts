<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest();
        if(request('search')){
            $posts->where('tittle', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        
        return view ('posts', [
            "tittle"=> "Posts",
            "active"=> "posts",
            // Menampilkan semua data dari database
            // "posts"=> Post::all()
            // Menampilkan data berdasarkan postingan terbaru
            'posts' => $posts->get()
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