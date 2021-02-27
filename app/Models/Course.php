<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'course_title',
        'about_course',
        'about_description',
        'heading_title',
        'title_1',
        'title_2',
        'title_3',
        'title_4',
        'title_5',
        'title_6',
        'title_7',
        'title_8',
        'topic_heading_one',
        'topic_description_one',
        'topic_heading_two',
        'topic_description_two',
        'topic_heading_three',
        'topic_description_three',
        'topic_heading_four',
        'topic_description_four',
        'topic_heading_five',
        'topic_description_five',
        'topic_heading_six',
        'topic_description_six',
        'status',
    ];


}
