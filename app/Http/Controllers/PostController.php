<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){    
        $tittle = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = 'in '. $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $tittle = 'by: '. $author->name;
        }

        return view ('posts', [
            "tittle"=> "Posts " . $tittle,
            "active"=> "posts",
            // Menampilkan semua data dari database
            // "posts"=> Post::all()
            // Menampilkan data berdasarkan postingan terbaru
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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