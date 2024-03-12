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

        public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('tittle', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        
    });
}
        
        public function category(){
            return $this->belongsTo(Category::class);
    }
        public function author(){
            return $this->belongsTo(User::class, 'user_id');
        }

}