<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $table = 'colleges';
    protected $fillable = ['name', 'slug', 'meta_title', 'meta', 'logo', 'image', 'resized_image', 'slider_text', 'about', 'overview', 'facilities', 'facilities2', 'side_image1', 'side_image2', 'side_image3', 'side_image4', 'youtube_id', 'campus_images', 'type', 'affiliation', 'established', 'location', 'specializations', 'fees', 'placements'];
}
