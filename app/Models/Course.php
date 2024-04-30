<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'packages' => 'array',       
    ];
    protected $table = 'courses';

    public function cat() {
        return $this->belongsTo(CourseCategory::class, 'category','id');
    }
    public function isEnrolled($courseId) {
        $enrolledCourses = Enroll::where('user_id', Auth::user()->id)->pluck('course_id')->toArray();
        
        return in_array($courseId, $enrolledCourses);
    }
    
}
