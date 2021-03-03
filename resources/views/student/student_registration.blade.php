@extends('layouts.frontend_master')

@section('frontend_content')

<style>
    table {
        width: 100%;
        background-color: #eee;
        border-collapse: collapse;
        margin: auto;
        border: 1px solid black;
        table-layout: fixed;
    }

    td {
        border: 1px solid green;
    }

    .table > tbody > tr > td {
        padding-top: 2px;
        padding-bottom: 1px;
        line-height: 1.02857143;
    }

    td input[type=checkbox], label {
        cursor: pointer;
    }

    input:checked + label {
        color: red;
        box-shadow: 0 0 0 1px red;
    }

    .mgBottom-6 {
        margin-bottom: 5px
    }

    .fbold {
        font-weight: bold
    }

    input[type=text], [type=date] {
        font-size: 16px;
        color: blue;
        height: 30px;
    }

    option {
        font-size: 14px;
    }

    .dropdown-menu {
        font-size: 14px;
    }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('student.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Course Name : <span class="tx-danger">*</span></label>
                                        <input readonly name="course_name" id="" type="text" class="form-control"
                                               placeholder="Course Name" value="{{ $course->course_title }}"></input>
                                    </div>
                                    @error('course_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Name : <span
                                                class="tx-danger">*</span></label>
                                        <input name="student_name" id="" type="text" class="form-control"
                                               placeholder="Student Name" value="{{ old('name') }}"></input>
                                    </div>
                                    @error('student_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Gender : <span
                                                class="tx-danger">*</span></label>
                                        <input name="gender" id="" type="text" class="form-control" placeholder="Gender"
                                               value="{{ old('name') }}"></input>
                                    </div>
                                    @error('gender')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email : <span
                                                class="tx-danger">*</span></label>
                                        <input name="email" id="" type="text" class="form-control" placeholder="Email"
                                               value="{{ old('name') }}"></input>
                                    </div>
                                    @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Date of Birth : <span
                                                class="tx-danger">*</span></label>
                                        <input style="padding-top: 0px;" name="date_of_birth" id="" type="date"
                                               class="form-control" placeholder="Date of Birth"
                                               value="{{ old('name') }}"></input>
                                    </div>
                                    @error('date_of_birth')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Mobile No. : <span class="tx-danger">*</span></label>
                                        <input name="mobile" id="" type="text" class="form-control"
                                               placeholder="Mobile No." value="{{ old('name') }}"></input>
                                    </div>
                                    @error('mobile')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Religion : <span
                                                class="tx-danger">*</span></label>
                                        <input name="religion" id="" type="text" class="form-control"
                                               placeholder="Religion" value="{{ old('name') }}"></input>
                                    </div>
                                    @error('religion')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Blood Group : <span class="tx-danger">*</span></label>
                                        <input name="blood_group" id="" type="text" class="form-control"
                                               placeholder="Blood Group" value="{{ old('name') }}"></input>
                                    </div>
                                    @error('blood_group')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Upazila : <span
                                                class="tx-danger">*</span></label>
                                        <input name="upazila" id="" type="text" class="form-control"
                                               placeholder="Upazila" value="{{ old('name') }}"></input>
                                    </div>
                                    @error('upazila')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">NID : <span class="tx-danger">*</span></label>
                                        <input name="nid" id="" type="text" class="form-control" placeholder="NID No."
                                               value="{{ old('name') }}"></input>
                                    </div>
                                    @error('nid')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Father's Name : <span
                                                class="tx-danger">*</span></label>
                                        <input name="father_name" id="" type="text" class="form-control"
                                               placeholder="Father's Name " value="{{ old('name') }}"></input>
                                    </div>
                                    @error('father_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Father's Phone No. : <span
                                                class="tx-danger">*</span></label>
                                        <input name="father_phone" id="" type="text" class="form-control"
                                               placeholder="Father's Phone No. " value="{{ old('name') }}"></input>
                                    </div>
                                    @error('father_phone')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Mother's Name : <span
                                                class="tx-danger">*</span></label>
                                        <input name="mother_name" id="" type="text" class="form-control"
                                               placeholder="Mother's Name " value="{{ old('name') }}"></input>
                                    </div>
                                    @error('mother_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Mother's Phone No. : <span
                                                class="tx-danger">*</span></label>
                                        <input name="mother_phone" id="" type="text" class="form-control"
                                               placeholder="Mother's Phone No. " value="{{ old('name') }}"></input>
                                    </div>
                                    @error('mother_phone')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">District : <span
                                                class="tx-danger">*</span></label>
                                        <input name="district" id="" type="text" class="form-control"
                                               placeholder="District" value="{{ old('name') }}"></input>
                                    </div>
                                    @error('district')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Photo : <span
                                                class="tx-danger">*</span></label>
                                        <input type="file" class="form-control" name="photo" value="{{ old('image') }}">
                                    </div>
                                    @error('photo')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group row mb-0">
                    <div style="padding-left: 59%;" class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
