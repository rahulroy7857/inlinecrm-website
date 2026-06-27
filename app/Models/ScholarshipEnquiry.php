<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipEnquiry extends Model
{
    use HasFactory;
    protected $table = 'scholarship_enquiries';
    protected $fillable = ['name', 'parent_name', 'mobile', 'email', 'address', 'classs', 'school', 'state', 'place'];
}
