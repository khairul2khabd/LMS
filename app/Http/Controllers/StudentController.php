<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $course = Courses::findOrFail($id);
        return view('student.student_registration', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'student_name' => 'required',
            'gender' => 'required',
            'photo' => 'required',
            'date_of_birth' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required'
        ]);

        $photo = $request->file('photo');
        $name_gen = uniqid() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(166, 110)->save('public/backend/student/' . $name_gen);
        $save_url = 'public/backend/student/' . $name_gen;

        $uuid = Str::uuid()->toString();

        Student::insert([
            'course_name' => $request->course_name,
            'student_name' => $request->student_name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'mobile' => $request->mobile,
            'religion' => $request->religion,
            'blood_group' => $request->blood_group,
            'email' => $request->email,
            'district' => $request->district,
            'upazila' => $request->upazila,
            'nid' => $request->nid,
            'photo' => $save_url,
            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'uuid' => $uuid,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Registration Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('student.registration.success', [$uuid]);
    }

    public function show($uuid)
    {
        $student = Student::where('uuid', '=', $uuid)->firstOrFail();
        return view('student.student_registration_success', compact('student'));
    }

}
