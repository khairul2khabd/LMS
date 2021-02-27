@extends('layouts.admin_master')

@section('Course_section')
    active show-sub
@endsection
@section('course_text')
    active
@endsection

@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
      <span class="breadcrumb-item active">MANAGE TEXT</span>
    </nav>
 <div class="sl-pagebody">
      <div class="row row-sm">
          <div class="col-md-12">
            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
               <div class="card pd-20 pd-sm-40">
                   <div class="card-header"></div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <tr>
                            <th class="wd-20p">Course Title</th>
                            <th class="wd-20p">About Course</th>
                            <th class="wd-30p">Course Des.</th>
                            <th class="wd-10p">Status</th>
                            <th class="wd-20p">Action</th>
                            </tr>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($courseText as $course)
                        <tr>
                            <td>{{ $course->course_title }}</td>
                            <td>{{ $course->about_course }}</td>
                            <td>{{ $course->about_description }}</td>
                            <td>
                                @if ($course->status == 1)
                                <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-primary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/course-text/edit/'.$course->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('admin/course/delete/'.$course->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Your sure Delete?')"><i class="fa fa-trash"></i></a>
                                @if ($course->status == 1)
                                <a href="{{ url('admin/course/inactive/'.$course->id) }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-down"></i></a>
                                @else
                                <a href="{{ url('admin/course/active/'.$course->id) }}" class="btn btn-info"><i class="fa fa-arrow-up"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                  </div><!-- table-wrapper -->
              </div><!-- card -->
            </div>
            </div>
          </div>
  </div>
</div>



{{-- <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home.text') }}">Back</a>
      <span class="breadcrumb-item active">Mannage Text</span>
    </nav>

    @if(session('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('update')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="sl-pagebody">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="sl-page-title">
                    <h5>Course Text Manage</h5>
                    </div><!-- sl-page-title -->
                    <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Manage List</h6>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('delete')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif


                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                            <th class="wd-20p">Course Title</th>
                            <th class="wd-20p">About Course</th>
                            <th class="wd-30p">Course Des.</th>
                            <th class="wd-10p">Status</th>
                            <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courseText as $course)
                            <tr>
                                <td>{{ $course->course_title }}</td>
                                <td>{{ $course->about_course }}</td>
                                <td>{{ $course->about_description }}</td>
                                <td>
                                    @if ($course->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-primary">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/course-text/edit/'.$course->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('admin/course/delete/'.$course->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Your sure Delete?')"><i class="fa fa-trash"></i></a>
                                    @if ($course->status == 1)
                                    <a href="{{ url('admin/course/inactive/'.$course->id) }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-down"></i></a>
                                    @else
                                    <a href="{{ url('admin/course/active/'.$course->id) }}" class="btn btn-info"><i class="fa fa-arrow-up"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                    </div><!-- card -->
            </div>
        </div>
    </div>
</div> --}}
@endsection
