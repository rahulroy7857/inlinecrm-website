<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable = ['name', 'number', 'alternative_number', 'dob', 'gender', 'father', 'mother', 'father_no', 'mother_no', 'address', 'city', 'post', 'course', 'tenth', 'twelth', 'high_qualification', 'high_qualification_name', 'compitative_exam', 'counselor_name', 'register_for', 'college', 'year_appearence', 'counselor_email'];
}
