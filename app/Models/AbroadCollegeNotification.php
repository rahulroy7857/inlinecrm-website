<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbroadCollegeNotification extends Model
{
    use HasFactory;
    protected $table = 'abroad_college_notifications';
    protected $fillable = ['college_id', 'meta_title', 'meta', 'slug', 'name', 'details'];
}
