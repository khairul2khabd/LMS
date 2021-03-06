@extends('layouts.admin_master')

@section('dasboard')
    active
@endsection

@section('admin_content')
 <!-- ########## START: MAIN PANEL ########## -->

 <div class="sl-mainpanel">

        <div class="ut">
            <a class="breadcrumb-item" href="{{ url('admin/home') }}"> </i>Dashboard</a>
        </div>

  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection
