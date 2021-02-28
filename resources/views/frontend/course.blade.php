@extends('layouts.frontend_master')

@section('frontend_content')

{{-- @php
$home = App\Models\HomeText::latest()->get();
@endphp --}}

<style>
    .shadow-lg {
        box-shadow: 0 4rem 3rem rgba(0, 0, 0, 0.175) !important
    }
    .shadow-lg:hover {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        cursor: pointer;
    }
    .card-text{color:black}
</style>

<!-- Service Section Start -->
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3"> </div>
        <div class="col-sm-3"><strong> {{$count}} Courses </strong></div>
    </div>




    @foreach($courseList->chunk(3) as $items)
    <div class="row course-set courses__row" style="color: black;">
        <div class="col-sm-3"></div>
        @foreach($items as $item)
        <div class="col-sm-3">
            <div class="card iq-mb-3 shadow-lg">
                <a href="{{ url('course/details/'.$item->id) }}" class="img-fluid"alt="">
                <img src="{{ asset($item->image) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$item->course_title}}</h4>
                    <p class="card-text">Course Duration : {{$item->course_duration_hour}}:{{$item->course_duration_minute}}:{{$item->course_duration_second}}
                        <br>Course Start Date : {{$item->coursef_start_date}} <br>Course End Date : {{$item->coursef_end_date}}</p>
                    <a href="#" class="btn btn-primary">Get Enrolled</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

</div>

@endsection
