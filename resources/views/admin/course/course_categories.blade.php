@extends('layouts.admin_master')

@section('Course_section')
active show-sub
@endsection
@section('course_categories')
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
        <a class="breadcrumb-item" href="{{ route('course.create_categories') }}">COURSE CATEGORIES</a>
        <span class="breadcrumb-item active">ADD</span>
    </nav>

    <div class="ut">
        <a class="breadcrumb-item" href="{{ url('admin/home') }}"> </i>Home</a>
        <a class="breadcrumb-item" href="{{ route('course.create') }}"> </i>Course Create</a>
        <span class="breadcrumb-item"> Add</span>
    </div>

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
                <form action="{{ route('course.create_categories') }}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Categories Name: <span class="tx-danger">*</span></label>
                                <input name="categories_name" type="text" class="form-control" placeholder="Categories Name"
                                       value="{{ old('categories_name') }}"></input>
                            </div>
                            @error('categories_name')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

            </div>
            <div class="form-layout-footer">
                <button type="submit" class="btn btn-success btn-xs" style="font-size: 20px;">Submit</button>
            </div><!-- form-layout-footer -->

            </form>
        </div><!-- form-layout -->
    </div><!-- card -->
    @endsection
