@extends('layouts.admin_master')

@section('Course_section')
active show-sub
@endsection
@section('course_text')
active
@endsection

@section('admin_content')

<style>
    img {
        border-radius: 50%;
    }
</style>

<div class="sl-mainpanel select-menu-text">
    <nav class="breadcrumb sl-breadcrumb select-menu-text">
        <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
        <a class="breadcrumb-item" href="{{ route('course.list') }}">COURSE LIST</a>
        <span class="breadcrumb-item active">LIST</span>
    </nav>
    <div class="sl-pagebody">

        <div class="card pd-40 pd-sm-40">

                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="iq-card">
                            <a href="{{ route('course.index') }}" class="nav-link @yield('course_text')">ADD COURSE +</a>
                            <div class="iq-card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">About Course</th>
                                        <th scope="col">Course Des.</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $sl = 1
                                    @endphp
                                    @foreach ($course as $course)
                                    <tr>
                                        <th scope="row">{{ $sl++ }}</th>
                                        <td><img src="{{ asset($course->image) }}" width="40" height="40" class="img-circle" alt="image">

                                        </td>
                                        <td>{{ $course->about_course }}</td>
                                        <td>{{ $course->course_title }}</td>
                                        <td>
                                            @if ($course->status == 1)
                                            <span class="badge badge-success" style="font-size:15px">Active</span>
                                            @else
                                            <span class="badge badge-danger" style="font-size:15px">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ url('admin/course/edit/'.$course->id) }}"
                                               class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-eye"></i></a>
                                            <a href="{{ url('admin/course/page/delete/'.$course->id) }}"
                                               class="btn btn-danger btn-sm mr-1 ml-1" id="delete"><i
                                                    class="fa fa-trash"></i></a>
                                            @if ($course->status == 1)
                                            <a href="{{ url('admin/course-page/inactive/'.$course->id) }}"
                                               class="btn btn-success btn-sm"><i class="fa fa-arrow-down"></i></a>
                                            @else
                                            <a href="{{ url('admin/course-page/active/'.$course->id) }}"
                                               class="btn btn-danger"><i class="fa fa-arrow-up"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

        </div><!-- card -->

        <div class="wrapper">

            <div id="content-page" class="content-page">
                <div class="container-fluid">

                </div>
            </div>
        </div>
        @endsection
