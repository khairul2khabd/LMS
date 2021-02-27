@extends('layouts.frontend_master')

@section('frontend_content')

    {{-- @php
        $home = App\Models\HomeText::latest()->get();
    @endphp --}}
  <!-- About Section Start -->
  <section class="about">
    <div class="max-width">
        <h2 class="title">about me </h2>
        <div class="about-content">
            <div class="column left">
                <img class="wow fadeInLeftBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"" src="{{ asset('public/frontend') }}/img/banner.png" alt="">
            </div> <!-- column left -->
            <div class="column right wow fadeInRightBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"">
                <div class="text">I'm Mazharul and I'm a <span class="tying1"></span></div>
                <p>I'm a professional web developer and expert in PHP Laravel framework. I have experience of years in web development, especially PHP and Laravel. I am a full stack developer and know both frontend and backend. Also, I have done projects for the industry. If you are facing any issue with Laravel or want to add new features Or want to develop a new web site then you are on the right place. I am here for you.</p>
                <a class="wow fadeInUpBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"" href="#">Download Cv</a>
            </div> <!-- column right -->
        </div> <!-- home content -->
    </div><!-- max-width -->
</section> <!-- About-section -->
<!-- About Section End -->

<!-- Service Section Start -->
<section class="services">
<div class="max-width">
    <h2 class="title wow fadeInLeftBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"">My Service</h2>
    <div class="service-content">
        <div class="card">
            <div class="box">
                <i class="fas fa fa-code"></i>
                <div class="text">Web development</div>
                <p>I have great experience in web development using different scripting language including PHP, JavaScript, hands on experience in HTML, CSS and bootstrap to make the website responsive and eye catching design.</p>
            </div> <!-- box -->
        </div> <!-- Card -->
        <div class="card">
            <div class="box">
                <i class="fas fa fa-code"></i>
                <div class="text">woocommerce</div>
                <p>I provided a guarantee to develop the Best Selling Ecommerce Website using php laravel Woocommerce. At Techhikers, we ensure the quality of Online Store using attractive layouts containing stunning designs, High-end payment Gateways, and SEO friendly Multi Vendor Ecommerce stores.
                </p>
            </div> <!-- box -->
        </div> <!-- Card -->
        <div class="card">
            <div class="box">
                <i class="fas fa fa-code"></i>
                <div class="text">PHP Developer</div>
                <p>I have great and excellent command on PHP programming web development language. I have also experienced on mysql,sql server and many other databases.
                    I am providing professional  and high quality services</p>
            </div> <!-- box -->
        </div> <!-- Card -->

    </div> <!-- home content -->
</div><!-- max-width -->
</section> <!-- About-section -->
<!-- Serviece Section End -->

<!--Contact Sections Start -->
@endsection
