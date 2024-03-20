<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fillable mengizinkan manipulasi database berdasarkan kolom
    // protected $fillable  = ['tittle', 'excerpt', 'body'];

    // Guarded mengizinkan manipulasi database berdasakan selain kolom = boleh
        protected $guarded = ['id'];

    // with berfungsi juga untuk mengambil tabel lain di database
        protected $with = (['category', 'author']);

        // Fungsi untuk search
        public function scopeFilter($query, array $filters){

        // Fungsi search di halaman posts
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('tittle', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
    });
        // Fungsi search dari halaman post masuk ke halaman category dan join ke  tabel category
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        // Fungsi search dari halaman post masuk ke halaman author dan join ke tabel author menggunakan arrow function
        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
}
        
        public function category(){
            return $this->belongsTo(Category::class);
    }
        public function author(){
            return $this->belongsTo(User::class, 'user_id');
        }

        public function getRouteKeyName()
        {
            return 'slug';
        }
}