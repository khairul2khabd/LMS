    <!doctype html>
    <html lang="en">

    <!-- Mirrored from iqonic.design/themes/sofbox-admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 10:56:41 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ADMIN DASHBOARD</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('public/backend') }}/images/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('public/backend') }}/css/bootstrap.min.css">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{ asset('public/backend') }}/css/typography.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
        <link rel="stylesheet" href="{{ asset('public/backend') }}/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('public/backend') }}/css/responsive.css">
    </head>
    <body>
        @guest
            @else
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
        <!-- Wrapper Start -->
        <div class="wrapper">
            @include('admin.inc.leftbar')
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                <div class="iq-sidebar-logo">
                    <div class="top-logo">
                        <a href="{{ url('admin/home') }}" class="logo">
                        <img src="{{ asset('public/backend') }}/images/logo.png" class="img-fluid" alt="">
                        <span>DASHBOARD</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    <h5 class="mb-0">ADMIN PANEL</h5>
                    {{-- <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DASHBOARD</li>
                        </ul>
                    </nav> --}}
                </div>
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="line-menu half start"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu half end"></div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item">
                            <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                            <form action="#" class="search-box">
                                <input type="text" class="text search-input" placeholder="Type here to search..." />
                            </form>
                            </li>
                            <li class="nav-item dropdown">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <i class="ri-mail-line"></i>
                                <span class="badge badge-pill badge-primary badge-up count-mail">3</span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset('public/backend') }}/images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Nik Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li class="nav-item">
                            <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <i class="ri-notification-2-line"></i>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-danger p-3">
                                        <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Order Recieved</h6>
                                                <small class="float-right font-size-12">23 hrs ago</small>
                                                <p class="mb-0">Lorem is simply</p>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset('public/backend') }}/images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Emma Watson Nik</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset('public/backend') }}/images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">5 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40" src="{{ asset('public/backend') }}/images/small/jpg.svg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Updates Available</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">120 MB</p>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                        </ul>
                    </div>
                    <ul class="navbar-list">
                        <li>
                            <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="{{ asset('public/backend') }}/images/user/Own pic.jpg" class="img-fluid rounded" alt="user"></a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">{{ Auth::user()->name }}</h5>
                                        <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                        </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-success-hover">
                                        <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-success">
                                            <i class="ri-profile-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Edit Profile</h6>
                                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                                        </div>
                                        </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-primary-danger-hover">
                                        <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-danger">
                                            <i class="ri-account-box-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Account settings</h6>
                                            <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                        </div>
                                        </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-secondary-hover">
                                        <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-secondary">
                                            <i class="ri-lock-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Privacy Settings</h6>
                                            <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                        </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                            </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
            @endguest
            <!-- TOP Nav Bar END -->
            <!-- Page Content  -->
            @yield('admin_content')
        </div>
        <!-- Wrapper END -->
        <!-- Footer -->
        <footer class="bg-white iq-footer">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Sofbox</a> All Rights Reserved.
                </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('public/backend') }}/js/jquery.min.js"></script>
        <script src="{{ asset('public/backend') }}/js/popper.min.js"></script>
        <script src="{{ asset('public/backend') }}/js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="{{ asset('public/backend') }}/js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="{{ asset('public/backend') }}/js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="{{ asset('public/backend') }}/js/waypoints.min.js"></script>
        <script src="{{ asset('public/backend') }}/js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="{{ asset('public/backend') }}/js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="{{ asset('public/backend') }}/js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="{{ asset('public/backend') }}/js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="{{ asset('public/backend') }}/js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="{{ asset('public/backend') }}/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{ asset('public/backend') }}/js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="{{ asset('public/backend') }}/js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="js/lottie.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('public/backend') }}/js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="{{ asset('public/backend') }}/js/custom.js"></script>
    </body>

    <script>

        @if(Session::has('message'))

            var type ="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                    toastr.info(" {{Session::get('message')}} ");
                    break;

                case 'success':
                    toastr.success(" {{Session::get('message')}} ");
                    break;

                case 'warning':
                    toastr.warning(" {{Session::get('message')}} ");
                    break;

                case 'error':
                    toastr.error(" {{Session::get('message')}} ");
                    break;
            }
        @endif
      </script>

    <script>
        $(document).on("click","#delete", function(e){
        e.preventDefault();
        var link= $(this).attr("href");
        swal({
            title: "Are sure to delete?",
            text: "Once Delected, You will not be able recover this imaginary file",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete)=> {
            if (willDelete) {
            window.location.href = link;
            }else{
            swal("Yor imaginary file safe!");
            }
        });
        });
    </script>

    <!-- Mirrored from iqonic.design/themes/sofbox-admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 10:56:43 GMT -->
    </html>
