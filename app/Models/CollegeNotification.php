<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeNotification extends Model
{
    use HasFactory;
    protected $table = 'college_notifications';
    protected $fillable = ['college_id', 'meta_title', 'meta', 'slug', 'name', 'details'];
}
