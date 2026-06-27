<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbroadCollegeCourse extends Model
{
    use HasFactory;
    protected $table = 'abroad_college_courses';
    protected $fillable = ['college_id', 'course_id', 'department_id', 'course_name', 'type', 'fee', 'mode', 'seat', 'exams', 'eligibility', 'duration', 'affiliation', 'status'];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public static function courseCount($id)
    {
        return AbroadCollegeCourse::where('college_id', $id)->count();
    }

    public static function getCollegeCount($id)
    {
        $colleges = AbroadCollegeCourse::join('abroad_colleges', 'abroad_colleges.id', 'college_courses.college_id')
                    ->where('college_courses.department_id', $id)
                    ->select('abroad_colleges.name', 'abroad_colleges.slug', 'abroad_colleges.id')
                    ->groupBy('abroad_colleges.id')
                    ->count();
        return $colleges;
    }

    public static function getColleges($id)
    {
        $colleges = AbroadCollegeCourse::join('abroad_colleges', 'abroad_colleges.id', 'college_courses.college_id')
                    ->where('college_courses.department_id', $id)
                    ->select('abroad_colleges.name', 'abroad_colleges.slug', 'colleges.id', 'abroad_colleges.resized_image')
                    ->groupBy('abroad_colleges.id')
                    ->get();
        return $colleges;
    }
}
