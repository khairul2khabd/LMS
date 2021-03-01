<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

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

    protected $casts = [
        'date_of_birth ' => 'datetime:Y-m-d',
    ];

    public function _courseCreate(request $request)
    {
        $request->validate([
            'image' => 'required',
            'course_title' => 'required',
            'about_course' => 'required',
            'benefits_of_the_course' => 'required',
            'coursef_start_date' => 'required',
            'coursef_end_date' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(166, 110)->save('public/frontend/images/course/' . $name_gen);
        $save_url = 'public/frontend/images/course/' . $name_gen;

        Courses::insert([
            'image' => $save_url,
            'course_title' => $request->course_title,
            'about_course' => $request->about_course,
            'course_duration_hour' => $request->course_duration_hour,
            'course_duration_minute' => $request->course_duration_minute,
            'course_duration_second' => $request->course_duration_second,
            'benefits_of_the_course' => $request->benefits_of_the_course,
            'requirements' => $request->requirements,
            'target_audience' => $request->target_audience,
            'materials_included' => $request->materials_included,
            'what_will_learn' => $request->what_will_learn,
            'topics_of_course' => $request->topics_of_course,
            'categories' => "SSSSS",
            'coursef_start_date' => $request->coursef_start_date,
            'coursef_end_date' => $request->coursef_end_date,
            'maximum_students' => "SS",
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('course.list')->with($notification);
    }

    //Course Manage
    public function CourseList()
    {
        $course = Courses::orderBy('id', 'DESC')->get();
        return view('admin.course.course-list', compact('course'));
    }


    public function edit($id)
    {
        $course_edit = Courses::findOrFail($id);
        return view('admin.course.course-edit', compact('course_edit'));
    }

    //Course Active
    public function courseActiveInactive($sts, $id)
    {
        print $sts;
        Courses::findOrFail($id)->update(
            ['status' => 1]
        );
        $notification = array(
            'message' => 'Successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $old_img = $request->old_img;

        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(166, 110)->save('public/frontend/images/course/' . $name_gen);
            $save_url = 'public/frontend/images/course/' . $name_gen;

            Courses::findOrFail($id)->update([
                'image' => $save_url,
                'course_title' => $request->course_title,
                'about_course' => $request->about_course,
                'course_duration_hour' => $request->course_duration_hour,
                'course_duration_minute' => $request->course_duration_minute,
                'course_duration_second' => $request->course_duration_second,
                'benefits_of_the_course' => $request->benefits_of_the_course,
                'requirements' => $request->requirements,
                'target_audience' => $request->target_audience,
                'materials_included' => $request->materials_included,
                'what_will_learn' => $request->what_will_learn,
                'topics_of_course' => $request->topics_of_course,
                'categories' => "SSSSS",
                'coursef_start_date' => $request->coursef_start_date,
                'coursef_end_date' => $request->coursef_end_date,
                'maximum_students' => "SS",
                'status' => 1,
                'updated_id' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('course.list')->with($notification);
        } else {
            Courses::findOrFail($id)->update([
                'course_title' => $request->course_title,
                'about_course' => $request->about_course,
                'course_duration_hour' => $request->course_duration_hour,
                'course_duration_minute' => $request->course_duration_minute,
                'course_duration_second' => $request->course_duration_second,
                'benefits_of_the_course' => $request->benefits_of_the_course,
                'requirements' => $request->requirements,
                'target_audience' => $request->target_audience,
                'materials_included' => $request->materials_included,
                'what_will_learn' => $request->what_will_learn,
                'topics_of_course' => $request->topics_of_course,
                'categories' => "SSSSS",
                'coursef_start_date' => $request->coursef_start_date,
                'coursef_end_date' => $request->coursef_end_date,
                'maximum_students' => "SS",
                'status' => 1,
                'updated_id' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('course.list')->with($notification);
        }
    }


    public function destroy(Courses $courses)
    {
        //
    }
}
