<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.student_registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(request $request)
    {
//        $request->validate([
//            'course_title' => 'required',
//            'about_course' => 'required',
//            'about_description' => 'required',
//        ], [
//            'course_title.required' => 'please course title required',
//        ]);
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
            'photo' => $request->photo,
            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'Enrolled Successfully Added');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
