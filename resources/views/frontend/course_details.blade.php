@extends('layouts.frontend_master')

@section('frontend_content')

<section class="p-0">
    <div class="" style="width: 80%; margin-left:10%">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-inline mt-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="heading-title">
                    <h1>{{ $course->course_title }}</h1>
                </div>
                <div class="subject d-flex" style="align-items: center; justify-content: space-between">
                    <div class="sub-text">
                        <span class="mr-2">By</span><a href="">admin</a>
                    </div>
                    <div class="course-level">
                        <span class="mr-2">Course level:</span><a href="">Intermediate</a>
                    </div>
                    <div class="social-icon">
                        <span class="mr-2">Share:</span>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <hr>
                <div><p>{{ $course->about_course  }}</p></div>
                <div>
                    <p>{{ $course->about_description }} </p>
                </div>
                <p>Description</p>
                <h4>{{ $course->heading_title }}</h4>
                <div class="mt-3">
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_1  }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_2 }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_3 }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_4 }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_5 }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_6 }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_7 }}</p>
                    <i class="fa fa-check float-left mr-2"></i><p>{{ $course->title_8 }}</p>
                </div>
                <h4 class="mt-5">Topics for this course</h4>
                <div class="container" id="accordion">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0"> <a class="text-dark" href="#collapse-one" data-toggle="collapse">{{ $course->topic_heading_one  }}</h5> </a>
                                </div>
                                <div class="collapse" id="collapse-one" data-parent="#accordion" >
                                    <div class="card-body">
                                        <span class="lead text-dark">{{ $course->topic_description_one }}</span><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-2">
                                <div class="card-header">
                                    <h5 class="mb-0"> <a class="text-dark" href="#collapse-two" data-toggle="collapse">{{ $course->topic_heading_two  }}</a></h5>
                                </div>

                                <div class="collapse" id="collapse-two" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="lead">{{ $course->topic_description_two }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0"><a class="text-dark" href="#collapse-three" data-toggle="collapse">{{ $course->topic_heading_three  }}</a></h5>
                                </div>
                                <div class="collapse" id="collapse-three" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="lead">{{ $course->topic_description_three }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3 mt-md-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0"><a class="text-dark" href="#collapse-four" data-toggle="collapse">{{ $course->topic_heading_four  }}</a></h5>
                                </div>
                                <div class="collapse" id="collapse-four" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="lead">{{ $course->topic_description_four  }}</p>

                                    </div>
                                </div>
                            </div>
                            <div class="card my-2">
                                <div class="card-header">
                                    <h5 class="mb-0"><a class="text-dark" href="#collapse-five" data-toggle="collapse">{{ $course->topic_heading_five  }}</a></h5>
                                </div>
                                <div class="collapse" id="collapse-five" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="lead">{{ $course->topic_description_five  }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0"><a class="text-dark" href="#collapse-six" data-toggle="collapse">{{ $course->topic_heading_six }}</a></h5>
                                </div>
                                <div class="collapse" id="collapse-six" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="lead">{{ $course->topic_description_six  }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href=""><img src="{{ asset('public/frontend') }}/img/02.jpg" class="img-fluid" alt=""></a>
                        </h5>
                        <div class="d-inline mt-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><br>
                        <a href="" class="mt-3 d-block">Management, Legal & Policy, IP Patent</a><br>
                        <span>by <a href="">admin</a> <span>IN</span> <a href="">Offline</a></span>
                    </div>
                    <div class="card-footer" style="background: white">
                        <span>FREE</span>
                        <div class="float-right"><i class="fa fa-shopping-cart mr-2"></i><a href="">Get Enrolled</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
