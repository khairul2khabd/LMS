@extends('layouts.admin_master')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="index.html">HOME</a>
          <a class="breadcrumb-item" href="index.html">HOME SECTION</a>
          <span class="breadcrumb-item active">HOME ADD</span>
        </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
          </div><!-- sl-page-title -->

          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"></h6>
            <p class="mg-b-20 mg-sm-b-30"></p>

            <div class="form-layout">
                <form action="{{ route('hometext.store') }}" method="post">
                    @csrf
            <div class="row mg-b-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                    <textarea name="title" id="" rows="5" cols="20" class="form-control" placeholder="Title Here"></textarea>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Header Title: <span class="tx-danger">*</span></label>
                    <textarea name="header_tile" id="" rows="5" cols="20" class="form-control" placeholder="Header Title Here"></textarea>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Sub Title: <span class="tx-danger">*</span></label>
                    <textarea name="sub_title" id="" rows="5" cols="20" class="form-control" placeholder="Sub title Here"></textarea>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">button: <span class="tx-danger">*</span></label>
                    <textarea name="button" id="" rows="2" cols="10" class="form-control" placeholder="button Here"></textarea>
                  </div>
                </div><!-- col-8 -->
            </div><!-- row -->
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info mg-r-5">ADD TEXT</button>
                </div><!-- form-layout-footer -->
            </form>
            </div><!-- form-layout -->
        </div><!-- card -->


@endsection
