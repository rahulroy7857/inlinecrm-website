<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = ['name', 'phone', 'email', 'infrastructure', 'academic', 'placement', 'value_money', 'campus', 'total', 'type', 'type_id', 'review'];
}
