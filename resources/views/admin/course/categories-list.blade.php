@extends('layouts.admin_master')

@section('Course_section')
active show-sub
@endsection
@section('course_text')
active
@endsection

@section('admin_content')

<style>
    img {
        border-radius: 50%;
    }
</style>

<div class="sl-mainpanel select-menu-text">
    <nav class="breadcrumb sl-breadcrumb select-menu-text">
        <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
        <a class="breadcrumb-item" href="{{ route('course.list') }}">COURSE LIST</a>
        <span class="breadcrumb-item active">LIST</span>
    </nav>
    <div class="sl-pagebody">

        <div class="card pd-40 pd-sm-40">

            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <a href="{{ route('course.index') }}" class="nav-link @yield('course_text')">ADD COURSE +</a>
                        <div class="iq-card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $sl = 1
                                @endphp
                                @foreach ($categories as $cat)
                                <tr>
                                    <th scope="row">{{ $sl++ }}</th>

                                    </td>
                                    <td>{{ $cat->categories_name }}</td>

                                    <td class="d-flex">
                                        <a href="{{ url('admin/course/edit/'.$cat->id) }}"
                                           class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-eye"></i></a>
                                        <a href="{{ url('admin/course/page/delete/'.$cat->id) }}"
                                           class="btn btn-danger btn-sm mr-1 ml-1" id="delete"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- card -->

        <div class="wrapper">

            <div id="content-page" class="content-page">
                <div class="container-fluid">

                </div>
            </div>
        </div>
        @endsection
