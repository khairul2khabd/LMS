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
        <a class="breadcrumb-item" href="{{ route('student.list') }}">STUDENT LIST</a>
        <span class="breadcrumb-item active">LIST</span>
    </nav>
    <div class="sl-pagebody">

        <div class="card pd-40 pd-sm-40">

            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Date Of Birth</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $sl = 1
                                @endphp

                                @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $sl++ }}</th>
                                    <td><img src="{{ asset($student->photo) }}" width="40" height="40"
                                             class="img-circle" alt="image">
                                    </td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->course_name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td class="d-flex">
                                        <a href="{{ url('admin/course/edit/'.$student->id) }}"
                                           class="btn btn-primary btn-sm" title="Edit">Approved</a>
                                        <a href="{{ url('admin/course/page/delete/'.$student->id) }}"
                                           class="btn btn-danger btn-sm mr-1 ml-1" id="delete">
                                            Reject
                                        </a>
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
