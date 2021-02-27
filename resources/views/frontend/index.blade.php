@extends('layouts.frontend_master')

@section('frontend_content')

    {{-- @php
        $home = App\Models\HomeText::latest()->get();
    @endphp --}}

   <!-- About Section Start -->
   <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">about me</h2>
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
<!-- Skills Sections End -->
<!-- My Team Sections Start -->

    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title wow fadeInLeftBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"">My Teams</h2>
            <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('public/frontend') }}/img/img3.jpg" alt="">
                            <div class="text">Someone Name</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi?</p>
                        </div> <!-- box -->
                    </div> <!-- carousel -->

                <div class="card">
                    <div class="box">
                        <img src="{{ asset('public/frontend') }}/img/img2.jpg" alt="">
                        <div class="text">Someone Name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi?</p>
                    </div> <!-- box -->
                </div> <!-- carousel -->
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('public/frontend') }}/img/img3.jpg" alt="">
                        <div class="text">Someone Name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi?</p>
                    </div> <!-- box -->
                </div> <!-- carousel -->
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('public/frontend') }}/img/img4.jpg" alt="">
                        <div class="text">Someone Name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi?</p>
                    </div> <!-- box -->
                </div> <!-- card -->
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('public/frontend') }}/img/img4.jpg" alt="">
                        <div class="text">Someone Name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi?</p>
                    </div> <!-- box -->
                </div> <!-- card -->
            </div><!--carousel -->
        </div><!-- max width -->
    </section> <!--team section -->
<!-- My Team Sections End -->
<!--Contact Sections Start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title wow fadeInLeftBig fisrt-word" data-wow-duration="2s" data-wow-delay="0s"">contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">get in touch</div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum in laborum quod cumque sunt ea asperiores eaque natus culpa error, autem similique maiores? Quasi architecto accusamus vero, ex minus harum?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">name :</div>
                                <div class="sub-title"> Md mazhaurl islam </div>
                            </div> <!-- info -->
                        </div> <!-- row -->
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">address :</div>
                                <div class="sub-title">Dhaka, bangladesh</div>
                            </div> <!-- info -->
                        </div> <!-- row -->
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">email :</div>
                                <div class="sub-title email">eng.mazharulfiverr@gmail.com</div>
                            </div> <!-- info -->
                        </div> <!-- row -->
                    </div> <!-- icons -->
                </div> <!-- culumn left -->
                <div class="column right">
                    <div class="text">message me</div> <!-- text -->
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="name" required>
                            </div> <!-- filed-name -->
                            <div class="field email">
                                <input type="email" placeholder="email" required>
                            </div> <!-- filed-name -->
                        </div><!-- fields -->
                        <div class="field subject">
                            <input type="text" placeholder="subject" required>
                        </div> <!-- filed-name -->
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="describe project..." required></textarea>
                        </div> <!-- filed-name -->
                        <div class="button">
                            <button type="submit"> send message</button>
                        </div>
                    </form> <!-- form -->
                </div> <!-- culmn rigtht -->
            </div> <!-- contact-content -->
        </div> <!-- max-width -->
    </section> <!-- contact section -->
<!-- Contact Section End -->

@endsection
