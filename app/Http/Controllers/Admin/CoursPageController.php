<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Course;
use App\Models\HomeText;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CoursPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //Course Page
    public function index(){
        return view('frontend.course');
    }
    //Course Details page
    public function CorseDetails($id){
        $course =Course::findOrFail($id);
        return view('frontend.course_details',compact('course'));
    }
    // Course Section
    public function Course(){
        return view('admin.course.index');
    }
    // Course Store
    public function CourseStore(Request $request){

        $request->validate([
            'image' => 'required',
            'course_title' => 'required',
            'about_course' => 'required',
            'about_description' => 'required',
            'heading_title' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
            'title_6' => 'required',
            'title_7' => 'required',
            'title_8' => 'required',
            'topic_heading_one' => 'required',
            'topic_description_one' => 'required',
            'topic_heading_two' => 'required',
            'topic_description_two' => 'required',
            'topic_heading_three' => 'required',
            'topic_description_three' => 'required',
            'topic_heading_four' => 'required',
            'topic_description_four' => 'required',
            'topic_heading_five' => 'required',
            'topic_description_five' => 'required',
            'topic_heading_six' => 'required',
            'topic_description_six' => 'required'
        ]);

        $image =$request->file('image');
        $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(166,110)->save('public/frontend/images/course/'.$name_gen);
        $save_url='public/frontend/images/course/'.$name_gen;

            Course::insert([
            'image' =>$save_url,
            'course_title' => $request->course_title,
            'about_course' => $request->about_course,
            'about_description' => $request->about_description,
            'heading_title' =>$request->heading_title,
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
            'title_6' => $request->title_6,
            'title_7' => $request->title_7,
            'title_8' => $request->title_8,
            'topic_heading_one' =>$request->topic_heading_one,
            'topic_description_one' =>$request->topic_description_one,
            'topic_heading_two' =>$request->topic_heading_two,
            'topic_description_two' =>$request->topic_description_two,
            'topic_heading_three' =>$request->topic_heading_three,
            'topic_description_three' =>$request->topic_description_three,
            'topic_heading_four' =>$request->topic_heading_four,
            'topic_description_four' =>$request->topic_description_four,
            'topic_heading_five' =>$request->topic_heading_five,
            'topic_description_five' =>$request->topic_description_five,
            'topic_heading_six' =>$request->topic_heading_six,
            'topic_description_six' =>$request->topic_description_six,
            'status' =>1,
            'created_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Created Successfully',
                'alert-type'=>'success'
                 );
            return redirect()->route('course.manage')->with($notification);
    }
    //Course Manage
    public function CourseManage(){
        $course = Course::orderBy('id','DESC')->get();
        return view('admin.course.manage',compact('course'));
    }
    // Course Edit
    public function CourseEdit($id){
        $course_edit = Course::findOrFail($id);
        return view('admin.course.edit',compact('course_edit'));
    }
    //Course Update
    public function CourseUpdate(Request $request){

        $id = $request->id;
        $old_img = $request->old_img;

        if($request->file('image')){
        unlink($old_img);
        $image =$request->file('image');
        $name_gen=uniqid().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(166,110)->save('public/frontend/images/course/'.$name_gen);
        $save_url='public/frontend/images/course/'.$name_gen;

        Course::findOrFail($id)->update([
            'image' =>$save_url,
            'course_title' => $request->course_title,
            'about_course' => $request->about_course,
            'about_description' => $request->about_description,
            'heading_title' =>$request->heading_title,
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
            'title_6' => $request->title_6,
            'title_7' => $request->title_7,
            'title_8' => $request->title_8,
            'topic_heading_one' =>$request->topic_heading_one,
            'topic_description_one' =>$request->topic_description_one,
            'topic_heading_two' =>$request->topic_heading_two,
            'topic_description_two' =>$request->topic_description_two,
            'topic_heading_three' =>$request->topic_heading_three,
            'topic_description_three' =>$request->topic_description_three,
            'topic_heading_four' =>$request->topic_heading_four,
            'topic_description_four' =>$request->topic_description_four,
            'topic_heading_five' =>$request->topic_heading_five,
            'topic_description_five' =>$request->topic_description_five,
            'topic_heading_six' =>$request->topic_heading_six,
            'topic_description_six' =>$request->topic_description_six,
            'updated_id' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Updated Successfully',
                'alert-type'=>'success'
                 );
            return redirect()->route('course.manage')->with($notification);
                }else{
                    Course::findOrFail($id)->update([
                        'course_title' => $request->course_title,
                        'about_course' => $request->about_course,
                        'about_description' => $request->about_description,
                        'heading_title' =>$request->heading_title,
                        'title_1' => $request->title_1,
                        'title_2' => $request->title_2,
                        'title_3' => $request->title_3,
                        'title_4' => $request->title_4,
                        'title_5' => $request->title_5,
                        'title_6' => $request->title_6,
                        'title_7' => $request->title_7,
                        'title_8' => $request->title_8,
                        'topic_heading_one' =>$request->topic_heading_one,
                        'topic_description_one' =>$request->topic_description_one,
                        'topic_heading_two' =>$request->topic_heading_two,
                        'topic_description_two' =>$request->topic_description_two,
                        'topic_heading_three' =>$request->topic_heading_three,
                        'topic_description_three' =>$request->topic_description_three,
                        'topic_heading_four' =>$request->topic_heading_four,
                        'topic_description_four' =>$request->topic_description_four,
                        'topic_heading_five' =>$request->topic_heading_five,
                        'topic_description_five' =>$request->topic_description_five,
                        'topic_heading_six' =>$request->topic_heading_six,
                        'topic_description_six' =>$request->topic_description_six,
                        'updated_id' => Carbon::now(),
                        ]);
                        $notification=array(
                            'message'=>'Updated Successfully',
                            'alert-type'=>'success'
                             );
                        return redirect()->route('course.manage')->with($notification);
                }
            }
            //Course Delete
            public function CoursePageDelete($id){

                $old_img = Course::findOrFail($id);
                unlink($old_img->image);
                Course::findOrFail($id)->delete();

                $notification=array(
                    'message'=>'Delete Successfully',
                    'alert-type'=>'success'
                     );
                return redirect()->back()->with($notification);

             }
             //Course Inactive
            public function CoursePageInactive($id){

                Course::findOrFail($id)->update(['status' => 0]);
                $notification=array(
                    'message'=>'Delete Successfully',
                    'alert-type'=>'error'
                     );
                return redirect()->back()->with($notification);
            }
               //Course Active
               public function CoursePageActive($id){

                Course::findOrFail($id)->update(['status' => 1]);
                $notification=array(
                    'message'=>'Delete Successfully',
                    'alert-type'=>'success'
                     );
                return redirect()->back()->with($notification);
            }
}
