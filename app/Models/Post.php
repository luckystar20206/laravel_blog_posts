<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Bisa menggunakan fillable atau guarded
    // protected $fillable  = ['tittle', 'excerpt', 'body'];

    protected $guarded = ['id'];
}