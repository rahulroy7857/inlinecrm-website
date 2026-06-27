<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbroadCollegeExam extends Model
{
    use HasFactory;
    protected $table = 'abroad_college_exams';
    protected $fillable = ['college_id', 'exam', 'full_name', 'start_date', 'end_date', 'mode', 'details'];
}
