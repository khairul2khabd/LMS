<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'student_name',
        'gender',
        'date_of_birth',
        'mobile',
        'religion',
        'blood_group',
        'email',
        'district',
        'upazila',
        'nid',
        'photo',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
        'status',
    ];
}
