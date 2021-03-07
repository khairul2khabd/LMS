<?php

namespace App\Http\Controllers;
use App\Models\Courses;

use App\Models\Student;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function _courseView()
    {
        $courseList = Courses::where('status', '=', '1')->orderBy('id', 'DESC')->get();
        //        $courseList = Courses::orderBy('id', 'DESC')->get();
        $count = count($courseList);
        return view('frontend.course' , compact('courseList', 'count'));
    }

    public function _courseDetails($id){
        $course =Courses::findOrFail($id);
        $studentList = Student::where('course_name', '=', $course ->course_title)->orderBy('id', 'DESC')->get();
        $count = count($studentList);
        return view('frontend.course_details',compact('course', 'count'));
    }
}
