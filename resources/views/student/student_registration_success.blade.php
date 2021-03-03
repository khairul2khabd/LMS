@extends('layouts.frontend_master')

@section('frontend_content')
<style>
    .header-text {
        color: #000;
    }

    .header-title {
        margin-bottom: 20px;
    }
    .span-text{
        color: #000;
    }
    .green{
        color: green;
    text-align: center}
</style>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-lg">
                <h5 class="card-header green">Registration Successfully !</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="offset-sm-1 col-sm-7">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Course Name : <span class="span-text"> {{ $student->course_name }} </span></td>
                                    <td>Student Name : <span class="span-text"> {{ $student->student_name }} </span></td>
                                </tr>
                                <tr>
                                    <td>Gender : <span class="span-text"> {{ $student->gender }} </span></td>
                                    <td>Date of Birth : <span class="span-text"> {{ $student->date_of_birth }} </span></td>
                                </tr>
                                <tr>
                                    <td>Mobile : <span class="span-text"> {{ $student->mobile }} </span></td>
                                    <td>Religion : <span class="span-text"> {{ $student->religion }} </span></td>
                                </tr>
                                <tr>
                                    <td>Email : <span class="span-text"> {{ $student->email }} </span></td>
                                    <td>Address : <span class="span-text"> {{ $student->address }} </span></td>
                                </tr>
                                <tr>
                                    <td>District : <span class="span-text"> {{ $student->district }} </span></td>
                                    <td>Upazila : <span class="span-text"> {{ $student->upazila }} </span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-3">

                            <div class="row header-title">
                                <div class="offset-sm-1 col-sm-10">
                                    <img src="{{ asset($student->photo) }}" class="card-img-top" alt="">
                                </div>
                                <div class="col-sm-2">&nbsp;</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



@endsection
