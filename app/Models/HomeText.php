<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_title',
        'about_course',
        'about_description',
        'status',
    ];


}
