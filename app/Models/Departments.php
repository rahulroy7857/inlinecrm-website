<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $fillable = ['name', 'slug', 'logo', 'image', 'details', 'position', 'status'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'department_id', 'id');
    }
    
    public function ugCourses()
    {
        return $this->hasMany(Course::class, 'department_id', 'id')->where('type', 1);
    }

    public function pgCourses()
    {
        return $this->hasMany(Course::class, 'department_id', 'id')->where('type', 2);
    }
    
    public function collegeCourses()
    {
        return $this->hasMany(CollegeCourse::class, 'department_id', 'id')
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MIN(id)'))
                ->from('college_courses')
                ->groupBy('college_id');
        });
    }
}
