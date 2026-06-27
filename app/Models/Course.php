<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['department_id', 'name', 'full_name', 'slug', 'logo', 'eligibility', 'duration', 'university', 'status', 'type', 'order'];

    public static function getCount($id)
    {
        return Course::where('department_id', $id)->count();
    }

    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }
    
    public function collegeCourses()
    {
        return $this->hasMany(CollegeCourse::class);
    }
    
    public function entranceExams()
    {
        return $this->belongsToMany(EntranceExam::class, 'course_entrance_exam');
    }
}
