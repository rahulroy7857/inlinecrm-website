<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandinPageEnquiry extends Model
{
    use HasFactory;
    protected $table = 'landin_page_enquiries';
    protected $fillable = ['name', 'father', 'mobile', 'email', 'state', 'place', 'course', 'neet', 'dezired_coutry', 'subject'];
}
