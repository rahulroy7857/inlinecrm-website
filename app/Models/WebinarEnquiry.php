<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebinarEnquiry extends Model
{
    use HasFactory;
    protected $table = 'webina_enquiries';
    protected $fillable = ['name', 'father', 'mobile', 'email', 'state', 'place', 'course', 'neet', 'dezied_coutry'];
}
