<?php

namespace App\Http\Controllers;
use App\Models\Courses;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function _courseView()
    {
        $courseList = Courses::orderBy('id', 'DESC')->get();
        $count = count($courseList);
        return view('frontend.course' , compact('courseList', 'count'));
    }

    public function _courseDetails($id){
        $course =Courses::findOrFail($id);
        return view('frontend.course_details',compact('course'));
    }
}
