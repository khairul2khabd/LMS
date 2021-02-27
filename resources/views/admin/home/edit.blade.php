@extends('layouts.admin_master')

@section('Course_section')
    active show-sub
@endsection
@section('course_text')
    active
@endsection

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
          <span class="breadcrumb-item active">Edit</span>
        </nav>
        <div class="sl-pagebody">
          <div class="sl-page-title">
          </div><!-- sl-page-title -->

          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"> Course text Table</h6>
            <p class="mg-b-20 mg-sm-b-30"></p>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="form-layout">
                <form action="{{ route('hometext.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $courseEdit->id }}">
            <div class="row mg-b-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Course Title: <span class="tx-danger">*</span></label>
                    <textarea name="course_title" id="" rows="2" cols="20" class="form-control" placeholder="Course Title">{{ $courseEdit->course_title }}</textarea>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">About Course: <span class="tx-danger">*</span></label>
                    <textarea name="about_course" rows="2" cols="20" class="form-control" placeholder="About Course" >{{ $courseEdit->about_course }}</textarea>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">About Description: <span class="tx-danger">*</span></label>
                    <textarea name="about_description" id="" rows="5" cols="20" class="form-control" placeholder="About Description">{{ $courseEdit->about_description }}</textarea>
                  </div>
                </div><!-- col-4 -->
            </div><!-- row -->
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info mg-r-5">Update Data</button>
                </div><!-- form-layout-footer -->
            </form>
            </div><!-- form-layout -->
        </div><!-- card -->
@endsection
