@extends('layouts.admin_master')

@section('dasboard')
    active
@endsection

@section('admin_content')
<div id="content-page" class="content-page">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">HOME SECTION</div>
                            <a href=""><div class="clearfix">BLANK</div></a>

                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">ABOUT SECTION</div>
                            <a href=""><div class="clearfix">BLANK</div></a>

                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">COURSE SECTION</div>
                            <a href="{{ route('home.text') }}"><div class="clearfix" style="color:red"># COURSE TEXT</div></a>
                            <a href="{{ route('course.learn') }}"><div class="clearfix" style="color:red"># COURSE LEARN</div></a>
                            <a href="{{ route('topic.course') }}"><div class="clearfix" style="color:red"># COURSE TOPIC</div></a>
                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">NEWS SECTION</div>
                            <a href=""><div class="clearfix">BLANK</div></a>
                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">GALLERY</div>
                            <a href=""><div class="clearfix">BLANK</div></a>
                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">FAQ</div>
                            <a href=""><div class="clearfix">BLANK</div></a>
                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-height overflow-hidden">
                            <div class="iq-card-body pb-0">
                            <div class="clearfix text-center">CONTACT</div>
                            <a href=""><div class="clearfix">BLANK</div></a>
                            <div class="text-center">
                                <p class="mb-0 text-secondary"><span class="text-success"></span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
@endsection
