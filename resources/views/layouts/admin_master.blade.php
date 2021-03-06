<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ADMIN | DASHBOARD</title>

    <link rel="shortcut icon" href="{{ asset('public/frontend') }}/images/marker.png"/>

    <!-- vendor css -->
    <link href="{{ asset('public/backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('public/backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('public/backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('public/backend') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend') }}/css/starlight.css">

    <style>
        .ut{

            border: none;height: 35px;
            padding: 5px;
            background: white;
            box-shadow: inset 0px 0px 5px rgba(0,0,0,0.5);
            margin: 0px;
            padding-left: 20px;
            outline: none !important;
            text-decoration: none;
            width: 100%;
            font-family: Arial, Verdana;
            font-size: 15px;
            color: #878989;
        }

    </style>

</head>
<body>
@guest
@else


@include('admin.inc.leftbar')

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header" style="background-color: white">
    <div class="sl-header-left">
         <a id="btnLeftMenu" href="" style="margin-left:10px"><i class="icon ion-navicon-round fa-2x"></i></a>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name" style="color: black">{{ Auth::user()->name }}<span class="hidden-md-down"></span></span>
                    <!--                    <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">-->
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">

                        <li><a href="#"> Edit Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>

    </div><!-- sl-header-right -->

</div><!-- sl-header -->

<!-- ########## END: HEAD PANEL ########## -->


@endguest

@yield('admin_content')

<script src="{{ asset('public/backend') }}/lib/jquery/jquery.js"></script>
<script src="{{ asset('public/backend') }}/lib/popper.js/popper.js"></script>
<script src="{{ asset('public/backend') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('public/backend') }}/lib/jquery-ui/jquery-ui.js"></script>
<script src="{{ asset('public/backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{ asset('public/backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{ asset('public/backend') }}/lib/d3/d3.js"></script>
<script src="{{ asset('public/backend') }}/lib/rickshaw/rickshaw.min.js"></script>
<script src="{{ asset('public/backend') }}/lib/chart.js/Chart.js"></script>
<script src="{{ asset('public/backend') }}/lib/Flot/jquery.flot.js"></script>
<script src="{{ asset('public/backend') }}/lib/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('public/backend') }}/lib/Flot/jquery.flot.resize.js"></script>
<script src="{{ asset('public/backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>

<script src="{{ asset('public/backend') }}/js/starlight.js"></script>
<script src="{{ asset('public/backend') }}/js/ResizeSensor.js"></script>
<script src="{{ asset('public/backend') }}/js/dashboard.js"></script>


<script>
    $(function () {
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>
</body>
</html>
