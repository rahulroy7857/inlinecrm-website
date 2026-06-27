<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolFAQ extends Model
{
    use HasFactory;
    protected $table = 'school_faqs';
    protected $fillable = ['school_id', 'question', 'answer'];
}
