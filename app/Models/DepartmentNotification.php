<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentNotification extends Model
{
    use HasFactory;
    protected $table = 'department_notifications';
    protected $fillable = ['department_id', 'meta_title', 'meta', 'slug', 'name', 'details'];
}
