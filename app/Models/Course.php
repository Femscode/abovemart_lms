<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
