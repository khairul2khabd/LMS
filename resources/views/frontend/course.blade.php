@extends('layouts.frontend_master')

@section('frontend_content')

{{-- @php
$home = App\Models\HomeText::latest()->get();
@endphp --}}

<!-- Service Section Start -->
<section class="services" id="service">
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

<!-- Skills Sections Start -->
<section class="skills" id="skills">
    <div class="max-width">
        <h2  class="title wow fadeInLeftBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"">My Skills</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">my creative skills & exprience.</div>
                <p>I am Web Developer with 2+ years of experience in web development. I have worked on many web developer with php laravel framework. I have advance knowledge of HTML 5, PHP, Laravel, WordPress good knowledge of JavaScript, Bootstrap, and JQuery.I love to explore new things and techniques. I would love to help you with your desire website project. I'm a hard working and dedicated person. </p>
                </a>
            </div> <!-- column left -->
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span>92%</span>
                    </div> <!-- info -->
                    <div class="line html"></div>
                </div> <!-- bars -->
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span>85%</span>
                    </div> <!-- info -->
                    <div class="line html"></div>
                </div> <!-- bars -->
                <div class="bars">
                    <div class="info">
                        <span>Javascript</span>
                        <span>73%</span>
                    </div> <!-- info -->
                    <div class="line js"></div>
                </div> <!-- bars -->
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>88%</span>
                    </div> <!-- info -->
                    <div class="line php"></div>
                </div> <!-- bars -->
                <div class="bars">
                    <div class="info">
                        <span>My SySQL</span>
                        <span>75%</span>
                    </div> <!-- info -->
                    <div class="line mysql"></div>
                </div> <!-- bars -->
            </div> <!-- column right -->
        </div> <!-- Skill Content -->
    </div><!-- max-width -->
</section> <!-- Skill Section -->


@endsection
