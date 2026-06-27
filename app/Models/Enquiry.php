<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiries';
    protected $fillable = ['name', 'phone', 'email', 'course', 'country', 'state', 'place', 'message', 'source', 'page', 'status'];
}
