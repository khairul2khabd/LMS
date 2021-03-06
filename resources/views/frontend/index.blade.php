@extends('layouts.frontend_master')

@section('frontend_content')

<style>
    .header-text {
        color: #000;
        font-size: 50px;
    }

    .header-title {
        margin-bottom: 20px;
    }

    .row-bootom-line {
        border-bottom: 1px solid #e0e0e0;
    }

    .grab {
        cursor: -webkit-grab;
        cursor: grab;
    }

    .iq-card-block {
        box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
        outline: none !important;
        text-decoration: none;
        font-family: Arial, Verdana;
        font-size: 15px;
        color: #878989;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-lg">

                <div class="card-body">
                    <div class="row header-title row-bootom-line">
                        <div class="col-xl-7">
                            <div class="col-xl-12 header-text" style="font-family: 'Monotype Corsiva'">Create New
                                iDEA!
                            </div>
                            <div class="col-xl-12">The iDEA Project under the banner of “Startups Bangladesh” is working
                                relentlessly with the goal of building innovative ecosystem and entrepreneurial culture
                                in Bangladesh since 1st July, 2016.
                            </div>
                        </div>
                        <div class="col-xl-5">The iDEA Project under the banner of “Startups Bangladesh” is working
                            relentlessly with the goal of building innovative ecosystem and entrepreneurial culture
                            in Bangladesh since 1st July, 2016.
                        </div>
                    </div>

                    <div class="row row-bootom-line">

                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                                <div class="iq-card-body pb-0">
                                    <div class="rounded-circle iq-card-icon iq-bg-primary">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <span class="float-right line-height-6">Online Courses</span>
                                    <br><br>
                                    <div class="text-left">
                                        <h4 class="mb-0">
                                            <span>Currently, we are offering 9 online courses based on ICT.</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                                <div class="iq-card-body pb-0">
                                    <div class="rounded-circle iq-card-icon iq-bg-warning">
                                        <i class="fa fa-bookmark-o"></i></div>
                                    <span class="float-right line-height-6">Offline Course</span>
                                    <br><br>
                                    <div class="text-left">
                                        <h4 class="mb-0">
                                            <span>Currently, we are offering 9 online courses based on ICT.</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                                <div class="iq-card-body pb-0">
                                    <div class="rounded-circle iq-card-icon iq-bg-success">
                                        <i class="fa fa-certificate"></i></div>
                                    <span class="float-right line-height-6">Certificate</span>
                                    <br><br>
                                    <div class="text-left">
                                        <h4 class="mb-0">
                                            <span>Currently, we are offering 9 online courses based on ICT.</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row header-title">
                        <div class="col-xl-12 header-text">Our Course Offerings</div>
                        <div class="col-xl-12"></div>
                    </div>


                </div>

            </div>
        </div>
    </div>


</div>


@endsection
