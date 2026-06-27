<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeCourse extends Model
{
    use HasFactory;
    protected $table = 'college_courses';
    protected $fillable = ['college_id', 'course_id', 'department_id', 'course_name', 'type', 'fee', 'mode', 'seat', 'exams', 'eligibility', 'duration', 'affiliation', 'status'];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
    
    public function college()
    {
        return $this->hasOne(College::class, 'id', 'college_id');
    }

    public static function courseCount($id)
    {
        return CollegeCourse::where('college_id', $id)->count();
    }

    public static function getCollegeCount($id)
    {
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->where('college_courses.department_id', $id)
                    ->select('colleges.name', 'colleges.slug', 'colleges.id')
                    ->groupBy('colleges.id')
                    ->count();
        return $colleges;
    }

    public static function getColleges($id)
    {
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->where('college_courses.department_id', $id)
                    ->select('colleges.name', 'colleges.slug', 'colleges.id', 'colleges.resized_image')
                    ->groupBy('colleges.id')
                    ->get();
        return $colleges;
    }
}
