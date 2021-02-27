@extends('layouts.admin_master')

@section('Course_section')
    active show-sub
@endsection
@section('course_learn')
    active
@endsection

@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
      <span class="breadcrumb-item active">COURSE LEARN</span>
    </nav>
 <div class="sl-pagebody">
      <div class="row row-sm">
          <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
               <div class="card pd-20 pd-sm-40">
                   <div class="card-header">COURSE MANAGE TABLE</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-10p">Heading Title</th>
                          <th class="wd-30p">Title__One</th>
                          <th class="wd-30p">Title__Two</th>
                          <th class="wd-10p"> Status</th>
                          <th class="wd-20p">Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($courseLearn as $item)
                        <tr>
                          <td>{{ $item->heading_title }}</td>
                          <td>{{ $item->title_1 }} Tk</td>
                          <td>{{ $item->title_2 }}</td>
                          <td>
                            @if ($item->status ==1)
                              <span class="badge pill-badge badge-success">Active</span>
                              @else
                              <span class="badge pill-badge badge-danger">Unactive</span>
                            @endif
                          </td>
                          <td>
                            <a href="{{ url('admin/learn/edit/'.$item->id) }}" class="btn btn-info btn-sm" title="edit data"><i class="fa fa-pencil"></i></a>

                            <a href="{{url('admin/learn/delete/'.$item->id)}}" class="btn btn-danger btn-sm" id="delete" title="delet data" onclick="return confirm('Your sure Delete?')"><i class="fa fa-trash"></i></a>

                          @if ($item->status ==1)
                          <a href="{{ url('admin/learn/inactive/'.$item->id) }}" class="btn btn-danger btn-sm" title="inactive"><i class="fa fa-arrow-down"></i></a>
                          @else
                          <a href="{{ url('admin/learn/active/'.$item->id) }}" class="btn btn-success btn-sm" title="active"><i class="fa fa-arrow-up"></i></a>
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
@endsection
