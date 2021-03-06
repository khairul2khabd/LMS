<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'shortname',
        'categoryid',
        'categorysortorder',
        'fullname',
        'displayname',
    ];
}
