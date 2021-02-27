<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTopic extends Model
{
    use HasFactory;


    protected $fillable = [
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
