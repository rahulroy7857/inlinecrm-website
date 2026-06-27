<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeFaq extends Model
{
    use HasFactory;
    protected $table = 'college_faqs';
    protected $fillable = ['college_id', 'question', 'answer'];
}
