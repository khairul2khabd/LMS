@extends('layouts.admin_master')

@section('course_page')
    active show-sub
@endsection
@section('home_text')
    active
@endsection
@section('admin_content')
<div class="wrapper">
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">HOME TEXT MANAGE</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <table class="table">
                      <thead class="thead-dark">
                         <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Course Title</th>
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
                         @foreach ($courseText as $course)
                         <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $course->course_title }}</td>
                            <td>{{ $course->about_course }}</td>
                            <td>{{ $course->about_description }}</td>
                            <td>
                                @if ($course->status == 1)
                                <span class="badge badge-success" style="font-size:17px">Active</span>
                                @else
                                <span class="badge badge-danger" style="font-size:17px">Inactive</span>
                                @endif
                            </td>
                            <td class="d-flex">
                                <a href="{{ url('admin/course-text/edit/'.$course->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('admin/course/delete/'.$course->id) }}" class="btn btn-danger btn-sm mr-1 ml-1" id="delete"><i class="fa fa-trash"></i></a>
                                @if ($course->status == 1)
                                <a href="{{ url('admin/course/inactive/'.$course->id) }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-down"></i></a>
                                @else
                                <a href="{{ url('admin/course/active/'.$course->id) }}" class="btn btn-danger"><i class="fa fa-arrow-up"></i></a>
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
    </div>
 </div>
 </div>
@endsection
