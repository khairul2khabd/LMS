@extends('layouts.admin_master')

@section('course_page')
    active show-sub
@endsection
@section('course_manage')
    active
@endsection

@section('admin_content')
  <!-- Page Content  -->
  <div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">COURSE EDIT TABLE</h4>
                   </div>
                </div>
             </div>
             <div class="iq-card">
                <div class="iq-card-body">
                    <form action="{{ route('course.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $course_edit->id }}">
                        <input type="hidden" name="old_img" value="{{ $course_edit->image }}">
                     <div class="row">
                     <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <input type="file" name="image" >
                            <label class="form-control-label">Old Image: <span class="tx-danger">*</span></label>
                            <img src="{{asset ($course_edit->image) }}" width="120px;"  >
                          </div>
                           @error('course_title')
                             <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                     </div>
                     <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label">Course Title: <span class="tx-danger">*</span></label>
                            <textarea name="course_title" id="" rows="2" cols="20" class="form-control">{{ $course_edit->course_title }}</textarea>
                          </div>
                           @error('course_title')
                             <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                     </div>
                     <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">About Course: <span class="tx-danger">*</span></label>
                                <textarea name="about_course" rows="2" cols="20" class="form-control">{{ $course_edit->about_course }}</textarea>
                          </div>
                           @error('about_course')
                           <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                     </div>
                     <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label">About Description: <span class="tx-danger">*</span></label>
                            <textarea name="about_description" class="form-control">{{ $course_edit->about_description }}</textarea>
                          </div>
                         @error('about_description')
                         <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                       </div>
                       <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Heading Title: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="heading_title" value="{{ $course_edit->heading_title }}" >
                        </div>
                        @error('heading_title')
                        <strong class="text-danger">{{ $message }}</strong>
                       @enderror
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">title__1: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="title_1" value="{{ $course_edit->title_1 }}">
                        </div>
                        @error('title_1')
                        <strong class="text-danger">{{ $message }}</strong>
                       @enderror
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Title__2: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="title_2" value="{{ $course_edit->title_2 }}">
                        </div>
                        @error('title_2')
                        <strong class="text-danger">{{ $message }}</strong>
                       @enderror
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label">Title__3: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_3" value="{{ $course_edit->title_3 }}">
                          </div>
                          @error('title_3')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label">Title__4: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_4" value="{{ $course_edit->title_4 }}">
                          </div>
                          @error('title_4')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label">Title__5: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_5" value="{{ $course_edit->title_5 }}">
                          </div>
                          @error('title_5')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label">Title__6: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_6" value="{{ $course_edit->title_6 }}">
                          </div>
                          @error('title_6')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label">Title__7: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_7" value="{{ $course_edit->title_7 }}">
                          </div>
                          @error('title_7')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Title__8: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_8" value="{{ $course_edit->title_8 }}">
                          </div>
                          @error('title_8')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">topic_heading_one : <span class="tx-danger">*</span></label>
                              <input type="text" class="form-control" name="topic_heading_one" value="{{ $course_edit->topic_heading_one }}">
                            </div>
                            @error('topic_heading_one')
                            <strong class="text-danger">{{ $message }}</strong>
                           @enderror
                        </div><!-- col-4 -->
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label">topic_description_one : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_one">{{ $course_edit->topic_description_one }}</textarea>
                              </div>
                              @error('topic_description_one')
                              <strong class="text-danger">{{ $message }}</strong>
                             @enderror
                            </div><!-- col-4 -->

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">topic_heading_two: <span class="tx-danger">*</span></label>
                              <input type="text" class="form-control" name="topic_heading_two" value="{{ $course_edit->topic_heading_two }}">
                            </div>
                            @error('topic_heading_two')
                            <strong class="text-danger">{{ $message }}</strong>
                           @enderror
                          </div><!-- col-4 -->
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label">topic_description_two : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_two">{{ $course_edit->topic_description_two }}</textarea>
                              </div>
                              @error('topic_description_two')
                              <strong class="text-danger">{{ $message }}</strong>
                             @enderror
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label">topic_heading_three: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_three" value="{{ $course_edit->topic_heading_three }}">
                              </div>
                              @error('topic_heading_three')
                              <strong class="text-danger">{{ $message }}</strong>
                             @enderror
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">topic_description_three : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_three" value="{{ old('topic_description_three') }}">{{ $course_edit->topic_description_three }}</textarea>
                                </div>
                                @error('topic_description_three')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label class="form-control-label">topic_heading_four: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_four" value="{{ $course_edit->topic_heading_four }}">
                                </div>
                                @error('topic_heading_four')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">topic_description_four : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_four" value="{{ old('topic_description_four') }}">{{ $course_edit->topic_description_four }}</textarea>
                                </div>
                                @error('topic_description_four')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label class="form-control-label">topic_heading_five: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_five" value="{{ $course_edit->topic_heading_five }}">
                                </div>
                                @error('topic_heading_five')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">topic_description_five : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_five" value="{{ old('topic_description_five') }}">{{ $course_edit->topic_description_five }}</textarea>
                                </div>
                                @error('topic_description_five')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                </div><!-- col-4 -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label">topic_heading_six: <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" name="topic_heading_six" value="{{ $course_edit->topic_heading_six }}">
                                    </div>
                                    @error('topic_heading_six')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label">topic_description_six : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_six" value="{{ old('topic_description_six') }}">{{ $course_edit->topic_description_six }}</textarea>
                                    </div>
                                    @error('topic_description_six')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                </div><!-- col-4 -->
                     </div>
                     <div class="form-layout-footer">
                        <button type="submit" class="btn btn-success mg-r-5" style="font-size: 20px">UPDATE DATA</button>
                    </div><!-- form-layout-footer -->
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
@endsection
