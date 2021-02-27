@extends('layouts.frontend_master')

@section('frontend_content')
<!-- Service Section Start -->
@php
$course = DB::table('courses')->where('status',1)->get();
// $learning = DB::table('learnings')->where('status',1)->first();
// $topics = DB::table('course_topics')->where('status',1)->first();
@endphp

<section>
    <div class="" style="width: 80%; margin-left:10%">
        <h4>Courses </h4>
        <div class="row">
            @foreach ($course as $item)
            <div class="col-lg-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('course/details/'.$item->id) }}" class="img-fluid"alt="">
                            <img src="{{ asset($item->image) }}" width="350px;" alt=""></a>
                        </h5>
                        <div class="d-inline mt-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                         </div><br>
                         <a href="{{ url('course/details/'.$item->id) }}" class="mt-3 d-block">{{ $item->course_title  }}</a><br>
                         <span>by <a href="">admin</a> <span>IN</span> <a href="">Offline</a></span>
                    </div>
                    <div class="card-footer" style="background: white">
                        <span>FREE</span>
                        <div class="float-right"><i class="fa fa-shopping-cart mr-2"></i><a href="">Get Enrolled</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!--Contact Sections Start -->
@endsection
