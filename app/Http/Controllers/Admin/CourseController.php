<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseTopic;
use App\Models\HomeText;
use App\Models\Learning;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //Home Section
    public function HomeText(){
        return view('admin.home.course_text');
    }
    //HOme text Store
    public function HometextStore(request $request){
        $request->validate([
            'course_title' => 'required',
            'about_course' => 'required',
            'about_description' => 'required',
        ],[
            'course_title.required' => 'please course title required',
        ]);
        HomeText::insert([
            'course_title' => $request->course_title,
            'about_course' => $request->about_course,
            'about_description' => $request->about_description,
            'status' =>1,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Added Success',
            'alert-type'=>'success'
             );
        return redirect()->route('text.manage')->with($notification);
     }
     // Text Manage
     public function TextManage(){
        $courseText = HomeText::orderBy('id','DESC')->get();
        return view('admin.home.manage',compact('courseText'));
     }
     // Course Edit
     public function CourseEdit($id){
        $courseEdit =HomeText::findOrFail($id);
        return view('admin.home.edit',compact('courseEdit'));
     }
     // Course Update
     public function CourseUpdate(Request $request){
        $course_id = $request->id;
        HomeText::findOrFail($course_id)->update([
            'course_title' => $request->course_title,
            'about_course' => $request->about_course,
            'about_description' => $request->about_description,
            'status' =>1,
            'updated_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Updated Successfully',
            'alert-type'=>'success'
             );
        return redirect()->route('text.manage')->with($notification);
     }
     //Course Delete
     public function CourseDelete($id){
        HomeText::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Delete Successfully',
            'alert-type'=>'error'
             );
        return redirect()->back()->with($notification);
     }
     // Course Inactive
     public function CourseInactive($id){
         HomeText::findOrFail($id)->update(['status'=> 0]);
         $notification=array(
            'message'=>'Inactive Successfully',
            'alert-type'=>'error'
             );
        return redirect()->back()->with($notification);
     }
     // Course Inactive
     public function CourseActive($id){
        HomeText::findOrFail($id)->update(['status'=> 1]);
        $notification=array(
            'message'=>'Activated Successfully',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }
    /////////////////////////////// Course Learn Route Are Here//////////////////////
    public function CourseLearn(){
        return view('admin.learn.index');
    }
    //Course Learn Store
    public function CourseLearnStore(Request $request){

       $request->validate([
            'heading_title' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
            'title_6' => 'required',
            'title_7' => 'required',
            'title_8' => 'required',
        ]);
        Learning::insert([
            'heading_title' =>$request->heading_title,
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
            'title_6' => $request->title_6,
            'title_7' => $request->title_7,
            'title_8' => $request->title_8,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'added Successfully',
            'alert-type'=>'success'
             );
        return redirect()->route('manage.learn')->with($notification);
    }
    /// Course Manage Learn
    public function ManageLearn(){
     $courseLearn = Learning::orderBy('id','DESC')->get();
        return view('admin.learn.manage',compact('courseLearn'));
    }
    // Course Edit
    public function LearnEdit($id){

        $learEdit =Learning::findOrFail($id);
        return view('admin.learn.edit',compact('learEdit'));
     }
     // CourseLearnUpdate
     public function CourseLearnUpdate(Request $request){
        $id =$request->id;

        Learning::findOrFail($id)->update([

            'heading_title' =>$request->heading_title,
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
            'title_6' => $request->title_6,
            'title_7' => $request->title_7,
            'title_8' => $request->title_8,
            'status' => 1,
            'updated_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Update Successfully',
            'alert-type'=>'success'
             );
        return redirect()->route('manage.learn')->with($notification);
     }
     //Course Delete
     public function LearnDelete($id){
        Learning::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Delete Successfully',
            'alert-type'=>'error'
             );
        return redirect()->back()->with($notification);
     }
     // Course Inactive
     public function LearnInactive($id){

        Learning::findOrFail($id)->update(['status'=> 0]);

        $notification=array(
            'message'=>'Inactive Successfully',
            'alert-type'=>'error'
             );
        return redirect()->back()->with($notification);
    }
    // Course Inactive
    public function LearnActive($id){

        Learning::findOrFail($id)->update(['status'=> 1]);
        $notification=array(
            'message'=>'Activated Successfully',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
   }
   ////////////////////////////// Topic Course Start/////////////////////////
   public function TopicCourse(){
    return view('admin.topic.index');
   }
   //Topic Store
   public function TopicStore(Request $request){

    $request->validate([
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
        CourseTopic::insert([
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
        'message'=>'Added Successfully',
        'alert-type'=>'success'
         );
    return redirect()->route('manage.topic')->with($notification);
   }
   // Topic Manage
   public function ManageTopic(){

    $topicManage = CourseTopic::orderBy('id','DESC')->get();
    return view('admin.topic.manage', compact('topicManage'));
   }
   //Topic Edit
   public function TopicEdit($id){

    $topicEdit = CourseTopic::findOrFail($id);
    return view('admin.topic.edit',compact('topicEdit'));
   }
   // Topic Update
   public function TopicUpdate(Request $request){

    $id = $request->id;

    CourseTopic::findOrFail($id)->update([
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
        'updated_at' => Carbon::now(),
    ]);
    $notification=array(
        'message'=>'Added Successfully',
        'alert-type'=>'success'
         );
    return redirect()->route('manage.topic')->with($notification);
   }
   // Topic Delete
   public function TopicDelete($id){
       CourseTopic::findOrFail($id)->delete();
       $notification=array(
        'message'=>'Added Successfully',
        'alert-type'=>'error'
         );
    return redirect()->back()->with($notification);
   }
   //Topic Inactive
   public function TopicInactive($id){
       CourseTopic::findOrFail($id)->update(['status' => 0 ]);

       $notification=array(
            'message'=>'Inactive Successfully',
            'alert-type'=>'error'
             );
        return redirect()->back()->with($notification);
   }
   //Topic Inactive
   public function TopicActive($id){
    CourseTopic::findOrFail($id)->update(['status' => 1 ]);
     $notification=array(
        'message'=>'Activated Successfully',
        'alert-type'=>'success'
         );
    return redirect()->back()->with($notification);
}
}
