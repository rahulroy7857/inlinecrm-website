<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $fillable = ['name', 'status'];

    public function schools()
    {
        return $this->hasMany(Course::class, 'state_id', 'id');
    }

    public function schoolsList()
    {
        return $this->hasMany(School::class, 'state_id', 'id');
    }
}
