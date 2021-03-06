@extends('layouts.admin_master')

@section('student_section')
active show-sub
@endsection
@section('student_list')
active
@endsection

@section('admin_content')

<style>
    .img-circle {
        border-radius: 50%;
    }

    .table > tbody > tr > td,
    .table > tfoot > tr > td,
    .table > thead > tr > td {
        padding-top: 2px;
        padding-bottom: 1px;
        height:25px;
        vertical-align: middle;
        color:#484848;
        cursor:pointer;
    }
    .table > thead > tr > th {
        padding-top: 2px;
        padding-bottom: 1px;
        height:30px;
        vertical-align: middle;
        background: #eee;
    }
    .table > tbody > tr:hover{
        color:#fff;
        background-color:white;
        height:20px;
    }
    .dropdown-menu {
        width:25%;
    }
    .even {
        background-color: #F9F8F8;
    }
    .odd {
        background-color: #F6F6F6 ;
        box-shadow: inset 0px 0px 10px rgba(0,0,0,0.1);
    }
    .col-sm-2{width:13.66666667%}
    .mgBottom-10{margin-bottom:10px}
</style>

<div class="sl-mainpanel select-menu-text">

    <div class="ut">
        <a class="breadcrumb-item" href="{{ url('admin/home') }}"> </i>Home</a>
        <a class="breadcrumb-item" href="{{ route('student.list') }}"> </i>Student List</a>
        <span class="breadcrumb-item"> List</span>
    </div>
    <div class="sl-pagebody">

        <div class="card pd-40 pd-sm-40">

            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <table class="table table-bordered table-hover f12 black">
                                <thead >
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
                                @php $class = sizeof($students)/ 2 === 0 ? 'even' : 'odd'; @endphp
                                <tr class="{{ $class }}">
                                <td scope="row">{{ $sl++ }}</td>
                                    <td><img src="{{ asset($student->photo) }}" width="40" height="40"
                                             class="img-circle" alt="image">
                                    </td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->course_name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('student.approved') }}"
                                           class="btn btn-primary btn-sm" title="Edit">Approved</a>
                                        <a href="{{ url('admin/course/page/delete/'.$student->id) }}"
                                           class="btn btn-danger btn-sm mr-1 ml-1" id="delete">
                                            Reject
                                        </a>
                                        <a href="{{ route('moodle.course.list') }}"
                                           class="btn btn-primary btn-sm" title="Edit">Moodle Course List</a>
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
