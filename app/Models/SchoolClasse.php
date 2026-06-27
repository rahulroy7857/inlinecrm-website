<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClasse extends Model
{
    use HasFactory;
    protected $table = 'school_classes';
    protected $fillable = ['school_id', 'class_id', 'course_name', 'fee', 'mode', 'seat', 'exams', 'eligibility', 'duration', 'affiliation', 'status'];

    public function classes()
    {
        return $this->hasOne(Classe::class, 'id', 'class_id');
    }

    public static function courseCount($id)
    {
        return SchoolClasse::where('school_id', $id)->count();
    }

    // public static function getCollegeCount($id)
    // {
    //     $colleges = SchoolClasse::join('colleges', 'colleges.id', 'college_courses.college_id')
    //                 ->where('college_courses.department_id', $id)
    //                 ->select('colleges.name', 'colleges.slug', 'colleges.id')
    //                 ->groupBy('colleges.id')
    //                 ->count();
    //     return $colleges;
    // }

    // public static function getColleges($id)
    // {
    //     $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
    //                 ->where('college_courses.department_id', $id)
    //                 ->select('colleges.name', 'colleges.slug', 'colleges.id', 'colleges.resized_image')
    //                 ->groupBy('colleges.id')
    //                 ->get();
    //     return $colleges;
    // }
}
