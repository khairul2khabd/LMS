@extends('layouts.admin_master')

@section('Course_section')
active show-sub
@endsection
@section('course_text')
active
@endsection

@section('admin_content')

<!-- ########## START: MAIN PANEL ########## -->
<style>
    .select-menu-text{height:40px; color: black}
    input[type=text], [type=date]{
        font-size:18px;
        color:blue;
        height: 30px;
    }
</style>

<div class="sl-mainpanel select-menu-text">
    <nav class="breadcrumb sl-breadcrumb select-menu-text">
        <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
        <a class="breadcrumb-item" href="{{ route('course.create') }}">COURSE CREATE</a>
        <span class="breadcrumb-item active">ADD</span>
    </nav>
    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="form-layout">
                <form action="{{ route('hometext.store') }}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Course Title: <span class="tx-danger">*</span></label>
                                <input name="course_title" type="text" class="form-control" placeholder="Course Title" value="{{ old('course_title') }}"></input>
                            </div>
                            @error('course_title')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Thambnail Image : <span class="tx-danger">*</span></label>
                                <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                            </div>
                            @error('image')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->

                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">About Course: <span class="tx-danger">*</span></label>
                                <textarea name="about_course" cols="20" class="form-control" placeholder="About Course" value="{{ old('about_course') }}"></textarea>
                            </div>
                            @error('about_course')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">About Description: <span class="tx-danger">*</span></label>
                                <textarea name="about_description" cols="10" class="form-control" placeholder="About Description" value="{{ old('about_description') }}"></textarea>
                            </div>
                            @error('about_description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Heading Title: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="heading_title" value="{{ old('heading_title') }}" placeholder="Heading Title">
                            </div>
                            @error('heading_title')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">title__1: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_1" value="{{ old('title_1') }}" placeholder=" Title__1">
                            </div>
                            @error('title_1')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Title__2: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_2" value="{{ old('title_2') }}" placeholder="Title__2">
                            </div>
                            @error('title_2')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Title__3: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_3" value="{{ old('Title_3') }}"  placeholder="Title__2">
                            </div>
                            @error('title_3')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Title__4: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_4" value="{{ old('Title_4') }}"  placeholder="Title__2">
                            </div>
                            @error('title_4')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Title__5: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_5" value="{{ old('Title_5') }}"  placeholder="Title__5">
                            </div>
                            @error('title_5')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Title__6: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_6" value="{{ old('Title_6') }}"  placeholder="Title__6">
                            </div>
                            @error('title_6')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Title__7: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_7" value="{{ old('Title_7') }}"  placeholder="Title__7">
                            </div>
                            @error('title_7')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Title__8: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="title_8" value="{{ old('Title_8') }}"  placeholder="Title__8">
                            </div>
                            @error('title_8')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_heading_one : <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_one" value="{{ old('topic_heading_one') }}" placeholder="topic_heading_one">
                            </div>
                            @error('topic_heading_one')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_description_one : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_one" value="{{ old('topic_description_one') }}" placeholder="topic_description_one"></textarea>
                            </div>
                            @error('topic_description_one')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_heading_two: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_two" value="{{ old('topic_heading_two') }}" placeholder=" topic_heading_two">
                            </div>
                            @error('topic_heading_two')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_description_two : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_two" value="{{ old('topic_description_two') }}" placeholder="topic_description_two"></textarea>
                            </div>
                            @error('topic_description_two')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_heading_three: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_three" value="{{ old('topic_heading_three') }}" placeholder=" topic_heading_three">
                            </div>
                            @error('topic_heading_three')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_description_three : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_three" value="{{ old('topic_description_three') }}" placeholder="topic_description_three"></textarea>
                            </div>
                            @error('topic_description_three')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_heading_four: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_four" value="{{ old('topic_heading_four') }}" placeholder=" topic_heading_four">
                            </div>
                            @error('topic_heading_four')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_description_four : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_four" value="{{ old('topic_description_four') }}" placeholder="topic_description_four"></textarea>
                            </div>
                            @error('topic_description_four')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_heading_five: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_five" value="{{ old('topic_heading_five') }}" placeholder=" topic_heading_five">
                            </div>
                            @error('topic_heading_five')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_description_five : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_five" value="{{ old('topic_description_five') }}" placeholder="topic_description_five"></textarea>
                            </div>
                            @error('topic_description_five')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_heading_six: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="topic_heading_six" value="{{ old('topic_heading_six') }}" placeholder=" topic_heading_six">
                            </div>
                            @error('topic_heading_six')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">topic_description_six : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_six" value="{{ old('topic_description_six') }}" placeholder="topic_description_six"></textarea>
                            </div>
                            @error('topic_description_six')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                    </div>
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-success mr-5" style="font-size: 20px;">CREATE DATA</button>
                    </div><!-- form-layout-footer -->

                </form>
            </div><!-- form-layout -->
        </div><!-- card -->
        @endsection
