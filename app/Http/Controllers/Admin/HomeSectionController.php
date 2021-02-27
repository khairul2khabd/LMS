<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseTopic;
use App\Models\HomeText;
use App\Models\Learning;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
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
        return redirect()->back()->with('success','Course Text Successfully Added');
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
        return redirect()->route('text.manage')->with('update', 'Updated Successfully');
     }
     //Course Delete
     public function CourseDelete($id){
        HomeText::findOrFail($id)->delete();
        return redirect()->back()->with('update', 'Delete Success');
     }
     // Course Inactive
     public function CourseInactive($id){
         HomeText::findOrFail($id)->update(['status'=> 0]);
         return redirect()->back()->with('update', 'Course Inactive');
     }
     // Course Inactive
     public function CourseActive($id){
        HomeText::findOrFail($id)->update(['status'=> 1]);
        return redirect()->back()->with('update', 'Course activated');
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
        return redirect()->back()->with('success', 'Successfully Added');
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
        return redirect()->route('manage.learn')->with('success', 'Updated Successfully');
     }
     //Course Delete
     public function LearnDelete($id){
        Learning::findOrFail($id)->delete();
        return redirect()->back()->with('update', 'Delete Success');
     }
     // Course Inactive
     public function LearnInactive($id){

         Learning::findOrFail($id)->update(['status'=> 0]);
        return redirect()->back()->with('e', 'Learn Inactive');
    }
    // Course Inactive
    public function LearnActive($id){
        Learning::findOrFail($id)->update(['status'=> 1]);
       return redirect()->back()->with('e', 'Learn activated');
   }
   ////////////////////////////// Topic Course Start/////////////////////////
   public function TopicCourse(){
    return view('admin.topic.index');
   }
   //Topic Store
   public function TopicStore(Request $request){

    // $request->validate([
    //     'topic_heading_one' => 'required',
    //     'topic_description_one' => 'required',
    //     'topic_heading_two' => 'required',
    //     'topic_description_two' => 'required',
    //     'topic_heading_three' => 'required',
    //     'topic_description_three' => 'required',
    //     'topic_heading_four' => 'required',
    //     'topic_description_four' => 'required',
    //     'topic_heading_five' => 'required',
    //     'topic_description_five' => 'required',
    //     'topic_heading_six' => 'required',
    //     'topic_description_six' => 'required'
    // ]);

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

    return redirect()->back()->with('success', 'Added Successfully');
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

    $id=$request->id;

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
    return redirect()->back()->with('success', 'Update Success');
   }
}
