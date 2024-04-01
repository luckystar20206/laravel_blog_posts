<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Fungsi untuk pindah halaman dan menampilkan data dari database
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Fungsi untuk menambah data
    {
        // Validasi data untuk form dashboard post
        $validatedData = $request->validate([
            'tittle'=> 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'required|image|file|max:2048',
            'body'=> 'required'
        ]);

        // Validasi untuk file gambar 
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        // Validasi untuk user id dan untuk excerpt yang mengambil data dari body dipotong hanya 200 kata
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New Post has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) // fungsi untuk pindah halaman dan hanya menampilkan data saja
    {
        return view('dashboard.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) //untuk menampilkan halaman edit
    {
        return view('dashboard.posts.edit', [
            'post'=> $post,
            'categories' => Category::all()
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         // Validasi data untuk form edit dashboard post
         $rules = [
            'tittle'=> 'required|max:255',
            'category_id' => 'required',
            'body'=> 'required'
        ];
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData = $request->validate($rules);

          // Validasi untuk user id dan untuk excerpt yang mengambil data dari body dipotong hanya 200 kata
          $validatedData['user_id'] = auth()->user()->id;
          $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
  
          Post::where('id', $post->id)
                ->update($validatedData);
          return redirect('/dashboard/posts')->with('success', 'New Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) // fungsi untuk menghapus data
    {
        Post::destroy($post->id); //menghapus data berdasarkan post by id
        return redirect('/dashboard/posts')->with('success', 'post has been Deleted!');
    }

    public function checkSlug(Request $request) //fungsi untuk mengambil otomatis slug dari tittle
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->tittle);
        return response()->json(['slug' => $slug]);
    }
}
