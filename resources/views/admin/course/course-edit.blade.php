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
    .select-menu-text {
        height: 40px;
        color: black
    }

    input[type=text], [type=date] {
        font-size: 18px;
        color: blue;
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
                <form action="{{ route('course.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $course_edit->id }}">
                    <input type="hidden" name="old_img" value="{{ $course_edit->image }}">

                    <div class="row">

                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Course Title: <span class="tx-danger">*</span></label>
                                <input name="course_title" type="text" class="form-control" placeholder="Course Title"
                                       value="{{ $course_edit->course_title }}"></input>
                            </div>
                            @error('course_title')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Course Thumbnail Image : <span
                                        class="tx-danger">*</span></label>
                                <input type="file" class="form-control" name="image" value="{{ $course_edit->image }}">
                            </div>
                            @error('image')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div><!-- col-4 -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Course Description: <span
                                        class="tx-danger">*</span></label>
                                <textarea name="about_course" cols="10" class="form-control"
                                          placeholder="About Description" >{{ $course_edit->about_course }}</textarea>
                            </div>
                            @error('about_course')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label">Course Hour: </label>
                                <input type="text" class="form-control" name="course_duration_hour"
                                       value="{{ $course_edit->course_duration_hour }}" placeholder="HH">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class=" form-group">
                                <label class="form-control-label">Minute:</label>
                                <input type="text" class="form-control" name="course_duration_minute"
                                       value="{{ $course_edit->course_duration_minute }}" placeholder="MM">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label">Second</label>
                                <input type="text" class="form-control" name="course_duration_second"
                                       value="{{ $course_edit->course_duration_second }}" placeholder="SS">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Course Start Date: <span
                                        class="tx-danger">*</span></label>
                                <input type="date" class="form-control" name="coursef_start_date"
                                       value="{{ $course_edit->coursef_start_date }}">

                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Registration End Date: <span
                                        class="tx-danger">*</span></label>
                                <input type="date" class="form-control" name="coursef_end_date"
                                       value="{{ $course_edit->coursef_end_date }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Benefits of the course: <span
                                        class="tx-danger">*</span></label>
                                <textarea name="benefits_of_the_course" cols="10" class="form-control"
                                          placeholder="Benefits of the course">{{ $course_edit->benefits_of_the_course }}</textarea>
                            </div>
                            @error('about_description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Requirements/Instruction: <span
                                        class="tx-danger">*</span></label>
                                <textarea name="requirements" cols="10" class="form-control"
                                          placeholder="Benefits of the course">{{ $course_edit->requirements }}</textarea>
                            </div>
                            @error('about_description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Target Audience: </label>
                                <textarea name="target_audience" cols="10" class="form-control"
                                          placeholder="Target Audience">{{ $course_edit->target_audience }}</textarea>
                            </div>
                            @error('about_description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Materials Included: </label>
                                <textarea name="materials_included" cols="10" class="form-control"
                                          placeholder="Materials Included">{{ $course_edit->materials_included }}</textarea>
                            </div>
                            @error('about_description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">What Will I Learn: </label>
                                <textarea name="what_will_learn" cols="10" class="form-control"
                                          placeholder="What Will I Learn">{{ $course_edit->what_will_learn }}</textarea>
                            </div>
                            @error('what_will_learn')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Topics of Course: </label>
                                <textarea name="topics_of_course" cols="10" class="form-control"
                                          placeholder="Topics of Course">{{ $course_edit->topics_of_course }}</textarea>
                            </div>
                            @error('what_will_learn')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

            </div>
            <div class="form-layout-footer">
                <button type="submit" class="btn btn-success mr-5" style="font-size: 20px;">Submit</button>
            </div><!-- form-layout-footer -->

            </form>
        </div><!-- form-layout -->
    </div><!-- card -->
    @endsection
