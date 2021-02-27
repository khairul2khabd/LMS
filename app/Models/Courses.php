<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'course_title',
        'about_course',
        'about_description',
        'course_duration_hour',
        'course_duration_minute',
        'course_duration_second',
        'benefits_of_the_course',
        'requirements',
        'target_audience',
        'materials_included',
        'what_will_learn',
        'topics_of_course',
        'categories',
        'coursef_start_date',
        'coursef_end_date',
        'maximum_students',
        'status',
    ];
}
