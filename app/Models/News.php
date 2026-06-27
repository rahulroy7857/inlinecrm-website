<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['title', 'meta_title', 'meta', 'slug', 'content', 'image', 'resized_image', 'author', 'country', 'category'];
}