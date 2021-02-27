@extends('layouts.admin_master')

@section('course_page')
    active show-sub
@endsection
@section('home_text')
    active
@endsection

@section('admin_content')
    <!-- Page Content  -->
<div class="wrapper">
    <div id="content-page" class="content-page">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">COURSE  TEXT TABLE</h4>
                      </div>
                   </div>
                </div>
                <div class="iq-card">
                   <div class="iq-card-body">
                    <form action="{{ route('hometext.store') }}" method="post">
                        @csrf
                        <div class="row">


                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Course Title: <span class="tx-danger">*</span></label>
                                <textarea name="course_title" rows="2" cols="20" class="form-control" placeholder="COURSE TITLE" value="{{ old('course_title') }}"></textarea>
                              </div>
                              @error('course_title')
                                <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">About Course: <span class="tx-danger">*</span></label>
                                <textarea name="about_course" cols="20" class="form-control" placeholder="About Course" value="{{ old('about_course') }}"></textarea>
                              </div>
                              @error('about_course')
                              <strong class="text-danger">{{ $message }}</strong>
                             @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                              <label class="form-control-label">About Description: <span class="tx-danger">*</span></label>
                              <textarea name="about_description" cols="10" class="form-control" placeholder="About Description" value="{{ old('about_description') }}"></textarea>
                            </div>
                            @error('about_description')
                            <strong class="text-danger">{{ $message }}</strong>
                           @enderror
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-5" style="font-size: 20px;">ADD TEXT</button>
                        <a href="{{ route('text.manage') }}" class="btn btn-success" style="font-size: 20px;">TEXT MANAGE</a>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
