<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolNotification extends Model
{
    use HasFactory;
    protected $table = 'school_notifications';
    protected $fillable = ['school_id', 'meta_title', 'meta', 'slug', 'name', 'details'];
}
