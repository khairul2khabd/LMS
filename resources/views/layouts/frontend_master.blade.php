<!DOCTYPE html>
<html lang="en">
<head>
    <title>idea Startup</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/styles/responsive.css">

    <!-- fontend custome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/animate.css"/>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css_theme/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css_theme/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css_theme/responsive.css">

    <!-- fontend custome end -->
</head>
<body class="iq-page-menu-horizontal right-column-fixed">

<!-- loader Start -->
<!--<div id="loading">-->
<!--    <div id="loading-center">-->
<!--        <div class="loader">-->
<!--            <div class="cube">-->
<!--                <div class="sides">-->
<!--                    <div class="top"></div>-->
<!--                    <div class="right"></div>-->
<!--                    <div class="bottom"></div>-->
<!--                    <div class="left"></div>-->
<!--                    <div class="front"></div>-->
<!--                    <div class="back"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- loader END -->

<div class="wrapper" style="background:">
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
            <div class="iq-sidebar-logo" style="margin-left:120px;">
                <div class="top-logo" style="width: 80%">
                    <br>
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('public/frontend') }}/images/idea-logo.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <!-- header Menu -->
            <div class="iq-menu-horizontal">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                        <li class="active">
                            <a href="#ui-elements" onclick="window.location='{{ url("/") }}'"  class="iq-waves-effect collapsed" data-toggle="collapse"
                                  aria-expanded="false"><span>Home</span> </a>
                        </li>
                        <li>
                            <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"> <span>About</span><i
                                    class="ri-arrow-down-s-line iq-arrow-right"></i></a>
                            <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li>
                                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse"
                                       aria-expanded="false"><span>Email</span> </a>
                                </li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li>
                                    <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                                       aria-expanded="false"><span>User</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="user-info" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="profile.html">User Profile</a></li>
                                        <li><a href="profile-edit.html">User Edit</a></li>
                                        <li><a href="add-user.html">User Add</a></li>
                                        <li><a href="user-list.html">User List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>

                            <a href="#ui-elements" onclick="window.location='{{ route("course.list") }}'" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false">
                                <span>Courses</span></a>
                        </li>

                        <li>
                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"><span>News</span></a>
                        </li>

                        <li>
                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"><span>Gallery</span></a>
                        </li>

                        <li>
                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"><span>F A Q</span></a>
                        </li>

                        <li>
                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"><span>Contact</span></a>
                        </li>

                        <li>
                            <a href="#Pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"><i class="ri-record-circle-line"></i><span>MOODLE</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="Pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li>
                                    <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse"
                                       aria-expanded="false"><span>Charts</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="charts" class="iq-submenu iq-submenu-data collapse">
                                        <li><a href="chart-morris.html">Morris Chart</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                                       aria-expanded="false"><span>Extra Pages</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="extra-pages" class="iq-submenu iq-submenu-data collapse"
                                        data-parent="#iq-sidebar-toggle">
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse"
                               aria-expanded="false"><i class="ri-menu-3-line"></i><span>Account</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login.admin') }}">Sign in</a></li>
                                <li><a href="{{ route('student.registration') }}">Student Registration</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- end menu -->
        </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                @yield('frontend_content')
            </div>
        </div>
    </div>
</div>


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
                Copyright 2021 <a href="www.ctechbd.com">Crystal Technology Bangladesh Ltd.</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('public/frontend') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('public/frontend') }}/styles/bootstrap4/popper.js"></script>
<script src="{{ asset('public/frontend') }}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/slick-1.8.0/slick.js"></script>
<script src="{{ asset('public/frontend') }}/plugins/easing/easing.js"></script>
<script src="{{ asset('public/frontend') }}/js/custom.js"></script>


<!-- Custom Js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/042b6d566d.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="{{ asset('public/frontend') }}/js/wow.min.js"></script>
<script src="{{ asset('public/frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('public/frontend') }}/js/main.js"></script>


<script src="{{ asset('public/frontend') }}/js_theme/jquery.min.js"></script>

<script src="{{ asset('public/frontend') }}/js_theme/popper.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/bootstrap.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/jquery.appear.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/countdown.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/waypoints.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/jquery.counterup.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/wow.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/apexcharts.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/slick.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/select2.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/owl.carousel.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/smooth-scrollbar.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/lottie.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/core.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/charts.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/animated.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/chart-custom.js"></script>
<script src="{{ asset('public/frontend') }}/js_theme/custom.js"></script>

<script>
    new WOW().init();
</script>
</body>

</html>
