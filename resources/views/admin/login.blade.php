@extends('layouts.admin_master')

@section('admin_content')

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <form method="POST" action="{{ route('login.admin') }}">
        @csrf
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Admin <span class="tx-info tx-normal"> Panel</span></div>
        <div class="tx-center mg-b-60">Admin Dashboard</div>

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Address">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!-- form-group -->
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!-- form-group -->
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
            @if (Route::has('password.request'))
<!--                 <a class="btn btn-link" href="{{ route('password.request') }}"> -->
                <a class="btn btn-link" href="#">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
                <button type="button" onclick="window.location='{{ url("/") }}'" class="btn btn-success btn-sm">Home</button>
<!--                <button type="button" onclick="window.location='{{ route("course.list") }}'">Button</button>-->
        </div>
        </div><!-- login-wrapper -->
    </form>

  </div><!-- d-flex -->
@endsection
