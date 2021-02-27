  <!-- Sidebar  -->
  <div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="{{ url('admin/home') }}">
       <img src="images/logo.png" class="img-fluid" alt="">
       <span>DASHBOARD</span>
       </a>
       <div class="iq-menu-bt align-self-center">
          <div class="wrapper-menu">
             <div class="line-menu half start"></div>
             <div class="line-menu"></div>
             <div class="line-menu half end"></div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
            <li><a href="{{ url('/') }}" target="_blank" class="iq-waves-effect"><i class="las la-campground"></i><span>VISIT SITE</span></a></li>
             <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
             <li class="">
                <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>HOME PAGE</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li class=""><a href="index.html">Blank</a></li>
                </ul>
             </li>
             <li class="">
                <a href="#about" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="las la-tasks"></i><span>ABOUT PAGE</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="about" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li class=""><a href="index.html">Blank</a></li>
                </ul>
             </li>
             <li class="@yield('course_page')">
                <a href="#course" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="las la-tasks"></i><span>COURSE PAGE</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="course" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   {{-- <li class="@yield('home_text')"><a href="{{ route('home.text') }}">COURSE TEXT</a></li>
                   <li class="@yield('course_learn')"><a href="{{ route('course.learn') }}">COURSE LEARN</a></li>
                   <li class="@yield('topic_course')"><a href="{{ route('topic.course') }}">COURSE COURSE</a></li> --}}
                   <li class="@yield('course')"><a href="{{ route('course') }}">CREATE COURSE</a></li>
                   <li class="@yield('course_manage')"><a href="{{ route('course.manage') }}">COURSE MANAGE</a></li>
                </ul>
             </li>
             <li class="">
                <a href="#news" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="las la-tasks"></i><span>NEWS PAGE</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="news" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li class=""><a href="index.html">Blank</a></li>

                </ul>
             </li>
             <li class="">
                <a href="#gallery" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="las la-tasks"></i><span>GALLERY</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="gallery" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li class=""><a href="index.html">Blank</a></li>

                </ul>
             </li>
             <li class="">
                <a href="#faq" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="las la-tasks"></i><span>FAQ</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="faq" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li class=""><a href="index.html">Blank</a></li>

                </ul>
             </li>
             <li class="">
                <a href="#contact" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="las la-tasks"></i><span>CONTACT</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="contact" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li class=""><a href="index.html">Blank</a></li>
                  i>
                </ul>
             </li>
          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
 </div>
