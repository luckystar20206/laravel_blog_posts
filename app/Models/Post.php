<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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
        [
            "tittle"=>"Judul Post Ketiga",
            "slug"=>"judul-post-ketiga",
            "Author"=>"Bang Tamvan",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem, cumque ipsam quam cum, quos expedita neque quod sapiente ullam adipisci provident quasi odio ex eaque a perferendis impedit enim vero doloremque id natus incidunt modi! Suscipit repellendus modi veniam quam et repudiandae officiis, quidem quia distinctio necessitatibus. Recusandae veritatis, sequi debitis non ducimus cupiditate cum atque reiciendis corrupti quibusdam ex. Itaque illum, error similique temporibus, voluptate architecto adipisci sequi, libero porro ab voluptas debitis omnis dolores accusamus iure ducimus."
        ]
        ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
