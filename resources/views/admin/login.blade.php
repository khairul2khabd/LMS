@extends('layouts.admin_master')

@section('admin_content')

  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
       <div class="loader">
          <div class="cube">
             <div class="sides">
                <div class="top"></div>
                <div class="right"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="front"></div>
                <div class="back"></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- loader END -->
   <!-- Sign in Start -->
   <section class="sign-in-page bg-white">
       <div class="container-fluid p-0">
           <div class="row no-gutters">
               <div class="col-sm-6 align-self-center">
                <form method="POST" action="{{ route('login.admin') }}">
                    @csrf
                   <div class="sign-in-from">
                       <h1 class="mb-0">Sign in</h1>
                       <p>Enter your email address and password to access admin panel.</p>
                       <form class="mt-4">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Email address</label>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Address">
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                           <div class="form-group">
                               <label for="exampleInputPassword1">Password</label>
                               @if (Route::has('password.request'))
                               <a href="{{ route('password.request') }}"<a class="float-right">Forgot password?</a>
                               @endif
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="d-inline-block w-100">
                               <button type="submit" class="btn btn-success" style="font-size:20px">Sign in</button>
                           </div>
                           <div class="sign-info">
                               <ul class="iq-social-media">
                                   <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                   <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                   <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                               </ul>
                           </div>
                       </form>
                   </div>
                </form>x
               </div>
               <div class="col-sm-6 text-center">
                   <div class="sign-in-detail text-white" style="background: url({{ asset('public/backend') }}/images/login/2.jpg) no-repeat 0 0; background-size: cover;">
                       <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('public/backend') }}/images/logo-white.png" class="img-fluid" alt="logo"></a>
                       <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                           <div class="item">
                               <img src="{{ asset('public/backend') }}/images/login/1.png" class="img-fluid mb-4" alt="logo">
                               <h4 class="mb-1 text-white">Manage your orders</h4>
                               <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                           </div>
                           <div class="item">
                               <img src="{{ asset('public/backend') }}/images/login/1.png" class="img-fluid mb-4" alt="logo">
                               <h4 class="mb-1 text-white">Manage your orders</h4>
                               <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                           </div>
                           <div class="item">
                               <img src="{{ asset('public/backend') }}/images/login/1.png" class="img-fluid mb-4" alt="logo">
                               <h4 class="mb-1 text-white">Manage your orders</h4>
                               <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Sign in END -->
@endsection
