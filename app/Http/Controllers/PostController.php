<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view ('posts', [
            "tittle"=> "Posts",
            "posts"=> Post::all()
        ]);
    }
    public function show($slug){
        
        return view('post', [
            "tittle"=>"Single Post",
            "post"=> Post::find($slug)
        ]);
    }
}