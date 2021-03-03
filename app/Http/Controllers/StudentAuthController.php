<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class StudentAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function _studentList()
    {
        $students = Student::orderBy('id', 'DESC')->get();
        return view('admin.student.student_list', compact('students'));
    }

}
