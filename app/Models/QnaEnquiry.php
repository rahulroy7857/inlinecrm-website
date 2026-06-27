<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QnaEnquiry extends Model
{
    use HasFactory;
    protected $table = 'qna_enquiries';
    protected $fillable = ['name', 'email', 'question'];
}