<?php

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

Route::get('/blog', function(){
    $blog_posts = [
        [
            "tittle"=>"Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "Author"=>"Rangga Saputra",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem, cumque ipsam quam cum, quos expedita neque quod sapiente ullam adipisci provident quasi odio ex eaque a perferendis impedit enim vero doloremque id natus incidunt modi! Suscipit repellendus modi veniam quam et repudiandae officiis, quidem quia distinctio necessitatibus. Recusandae veritatis, sequi debitis non ducimus cupiditate cum atque reiciendis corrupti quibusdam ex. Itaque illum, error similique temporibus, voluptate architecto adipisci sequi, libero porro ab voluptas debitis omnis dolores accusamus iure ducimus."
        ],
        [
            "tittle"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "Author"=>"Book Yourself",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem, cumque ipsam quam cum, quos expedita neque quod sapiente ullam adipisci provident quasi odio ex eaque a perferendis impedit enim vero doloremque id natus incidunt modi! Suscipit repellendus modi veniam quam et repudiandae officiis, quidem quia distinctio necessitatibus. Recusandae veritatis, sequi debitis non ducimus cupiditate cum atque reiciendis corrupti quibusdam ex. Itaque illum, error similique temporibus, voluptate architecto adipisci sequi, libero porro ab voluptas debitis omnis dolores accusamus iure ducimus."
        ],
        
];
    return view ('posts', [
        "tittle"=> "Blog",
        "posts"=>$blog_posts
    ]);
});


// Halaman Single Post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "tittle"=>"Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "Author"=>"Rangga Saputra",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem, cumque ipsam quam cum, quos expedita neque quod sapiente ullam adipisci provident quasi odio ex eaque a perferendis impedit enim vero doloremque id natus incidunt modi! Suscipit repellendus modi veniam quam et repudiandae officiis, quidem quia distinctio necessitatibus. Recusandae veritatis, sequi debitis non ducimus cupiditate cum atque reiciendis corrupti quibusdam ex. Itaque illum, error similique temporibus, voluptate architecto adipisci sequi, libero porro ab voluptas debitis omnis dolores accusamus iure ducimus."
        ],
        [
            "tittle"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "Author"=>"Book Yourself",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem, cumque ipsam quam cum, quos expedita neque quod sapiente ullam adipisci provident quasi odio ex eaque a perferendis impedit enim vero doloremque id natus incidunt modi! Suscipit repellendus modi veniam quam et repudiandae officiis, quidem quia distinctio necessitatibus. Recusandae veritatis, sequi debitis non ducimus cupiditate cum atque reiciendis corrupti quibusdam ex. Itaque illum, error similique temporibus, voluptate architecto adipisci sequi, libero porro ab voluptas debitis omnis dolores accusamus iure ducimus."
        ],
        
];

    $new_post =[];
    foreach ($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle"=>"Single Post",
        "post"=>$new_post
    ]);
});
