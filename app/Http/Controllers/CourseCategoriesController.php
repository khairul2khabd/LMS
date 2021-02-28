<?php

namespace App\Http\Controllers;

use App\Models\CourseCategories;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CourseCategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.course.course_categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _courseCategoriesCreate(request $request)
    {
        $request->validate([
            'categories_name' => 'required',
        ]);

        CourseCategories::insert([
            'categories_name' => $request->categories_name,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('course.categories_list')->with($notification);
    }

    public function _courseCategoriesList()
    {
        $categories = CourseCategories::orderBy('id', 'DESC')->get();
        return view('admin.course.categories-list', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseCategories  $courseCategories
     * @return \Illuminate\Http\Response
     */
    public function show(CourseCategories $courseCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategories  $courseCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCategories $courseCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCategories  $courseCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCategories $courseCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCategories  $courseCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseCategories $courseCategories)
    {
        //
    }
}
