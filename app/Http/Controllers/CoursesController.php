<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.course.courses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(request $request)
    {
        $request->validate([
            'image' => 'required',
            'course_title' => 'required',
            'about_course' => 'required',
            'about_description' => 'required',
            'coursef_start_date' => 'required',
            'coursef_end_date' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(166, 110)->save('public/frontend/images/course/' . $name_gen);
        $save_url = 'public/frontend/images/course/' . $name_gen;

        Course::insert([
            'image' => $save_url,
            'course_title' => $request->course_title,
            'about_course' => $request->about_course,
            'about_description' => $request->about_description,
            'course_duration_hour' => $request->course_duration_hour,
            'course_duration_minute' => $request->course_duration_minute,
            'course_duration_second' => $request->course_duration_second,
            'benefits_of_the_course' => $request->benefits_of_the_course,
            'requirements' => $request->requirements,
            'target_audience' => $request->target_audience,
            'materials_included' => $request->materials_included,
            'what_will_learn' => $request->what_will_learn,
            'topics_of_course' => $request->topics_of_course,
            'categories' => $request->categories,
            'coursef_start_date' => $request->coursef_start_date,
            'coursef_end_date' => $request->coursef_end_date,
            'maximum_students' => $request->maximum_students,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('course.manage')->with($notification);
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
     * @param  \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
