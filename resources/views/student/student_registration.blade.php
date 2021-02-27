@extends('layouts.frontend_master')

@section('frontend_content')

<style>
    table {
        width: 100%;
        background-color: #eee;
        border-collapse:collapse;
        margin: auto;
        border: 1px solid black;
        table-layout: fixed;
    }
    td {
        border: 1px solid green;
    }

    .table>tbody>tr>td
    {
        padding-top: 2px;
        padding-bottom: 1px;
        line-height: 1.02857143;
    }
    td input[type=checkbox], label {
        cursor:pointer;
    }
    input:checked + label {
        color: red;
        box-shadow: 0 0 0 1px red;
    }
    .mgBottom-6{margin-bottom: 5px}
    .fbold{font-weight:bold}
    input[type=text], [type=date]{
        font-size:16px;
        color:blue;
        height: 30px;
    }
    option{
        font-size:14px;
    }
    .dropdown-menu{ font-size: 14px;}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('student.create') }}" method="post">
                        @csrf

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">course_name : <span class="tx-danger">*</span></label>
                                <input name="course_name" id="" type="text"  class="form-control" placeholder="Student Name" value="{{ old('name') }}"></input>
                            </div>
                            @error('course_name')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
</div>


@endsection
