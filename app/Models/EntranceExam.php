<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntranceExam extends Model
{
    use HasFactory;
    
    protected $table = 'entrance_exams';
    
    protected $fillable = [
        'meta_title',
        'meta',
        'slug',
        'full_name',
        'short_name',
        'conducted_by',
        'purpose',
        'eligibility',
        'exam_pattern',
        'mode',
        'duration',
        'course_id',
        'admission_process',
        'status'
    ];

    protected $casts = [
        'exam_pattern' => 'array',
        'status' => 'boolean'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public static function getActiveExams()
    {
        return self::where('status', true)->limit(10)->get();
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_entrance_exam');
    }
} 