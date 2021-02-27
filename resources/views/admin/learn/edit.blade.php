@extends('layouts.admin_master')

@section('Course_section')
    active show-sub
@endsection
@section('course_learn')
    active
@endsection

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
          <span class="breadcrumb-item active">LEARNING</span>
        </nav>
        <div class="sl-pagebody">
          <div class="sl-page-title">
          </div><!-- sl-page-title -->

          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"> WHAT WILL I LEARN</h6>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="form-layout">
                <form action="{{ route('learn.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $learEdit->id }}">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Heading Title: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="heading_title" value="{{ $learEdit->heading_title }}" >
                  </div>
                  @error('heading_title')
                  <strong class="text-danger">{{ $message }}</strong>
                 @enderror
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">title__1: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="title_1" value="{{ $learEdit->title_1 }}">
                  </div>
                  @error('title_1')
                  <strong class="text-danger">{{ $message }}</strong>
                 @enderror
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Title__2: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="title_2" value="{{ $learEdit->title_2 }}">
                  </div>
                  @error('title_2')
                  <strong class="text-danger">{{ $message }}</strong>
                 @enderror
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title__3: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="title_3" value="{{ $learEdit->title_3 }}">
                    </div>
                    @error('title_3')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title__4: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="title_4" value="{{ $learEdit->title_4 }}">
                    </div>
                    @error('title_4')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title__5: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="title_5" value="{{ $learEdit->title_5 }}">
                    </div>
                    @error('title_5')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title__6: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="title_6" value="{{ $learEdit->title_6 }}">
                    </div>
                    @error('title_6')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title__7: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="title_7" value="{{ $learEdit->title_7 }}">
                    </div>
                    @error('title_7')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title__8: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="title_8" value="{{ $learEdit->title_8 }}">
                    </div>
                    @error('title_8')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
            </div><!-- row -->
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info mg-r-5">UPDATE</button>
                </div><!-- form-layout-footer -->
            </form>
            </div><!-- form-layout -->
        </div><!-- card -->
@endsection
