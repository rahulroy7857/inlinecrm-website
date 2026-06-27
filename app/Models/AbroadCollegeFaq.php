<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbroadCollegeFaq extends Model
{
    use HasFactory;
    protected $table = 'abroad_college_faqs';
    protected $fillable = ['college_id', 'question', 'answer'];
}
