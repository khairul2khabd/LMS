<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iDea</title>


    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/styles/bootstrap4/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/plugins/OwlCarousel2-2.2.1/animate.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/plugins/slick-1.8.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/styles/main_styles.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend') }}/styles/responsive.css"/>

    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/animate.css"/>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/style.css"/>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/responsive.css"/>
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css"/>



    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/frontend') }}/images/marker.png"/>
    <!-- Bootstrap CSS -->
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css_theme/typography.css"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css_theme/style.css"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css_theme/responsive.css"/>


</head>
<body>

@guest
@else
<!-- Wrapper Start -->
<div class="wrapper">

    @include('admin.inc.include_left_menubar')

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            @yield('admin_content')
        </div>
    </div>
</div>
@endguest


<!-- Wrapper END -->
<!-- Footer -->
<!--<footer class="bg-white iq-footer">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6">-->
<!--                <ul class="list-inline mb-0">-->
<!--                    <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>-->
<!--                    <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-lg-6 text-right">-->
<!--                Copyright 2020 <a href="#">Sofbox</a> All Rights Reserved.-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<!-- Footer END -->


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
