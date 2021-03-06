<!-- Menu bar left top  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ url('admin/home') }}">
            <img src="{{ asset('public/frontend') }}/images/idea-logo.png" class="img-fluid" alt="">
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar sl-sideleft">
        <nav class="iq-sidebar-menu sl-sideleft-menu">

            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li>
                    <a href="{{ url('/') }}" class="iq-waves-effect collapsed"
                       aria-expanded="false"><i class="menu-item-icon icon ion-ios-home-outline tx-22"></i><span>Visit Site</span>
                    </a>
                </li>

                <li class="active">
                    <a href="#dashboard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="ri-home-4-line"></i><span>Dashboard</span> </a>
                </li>
                <li>
                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-bars"></i> <span>Course Manage</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('course.index') }}" class="nav-link @yield('course_text')">
                                Create Course</a>
                        </li>
                        <li><a href="{{ route('course.list') }}"
                               class="nav-link @yield('course_text')">
                                Course List</a></li>

                        <li><a href="{{ route('categories.list') }}"
                               class="nav-link @yield('course_text')">
                                Course Categories</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-user"></i><span>Student Manage</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('student.list') }}" class="nav-link @yield('course_text')">
                                Student List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="sl-menu-link @yield('Course_section')">
                        <div class="sl-menu-item">
                            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                            <span class="menu-item-label">STUDENT MANAGE</span>
                            <i class="menu-item-arrow fa fa-angle-down"></i>
                        </div><!-- menu-item -->
                    </a><!-- sl-menu-link -->
                    <ul class="sl-menu-sub nav flex-column">
                        <li class="nav-item"><a href="{{ route('student.list') }}" class="nav-link @yield('course_text')">
                                Student List</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>


<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="index.html" class="logo">
                    <img src="images/logo.png" class="img-fluid" alt="">
                    <span>__</span>
                </a>
            </div>
        </div>
        <div class="navbar-breadcrumb">
            <h5 class="mb-0">Dashboard</h5>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ul>
            </nav>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i
                                class="ri-fullscreen-line"></i></a></li>
                </ul>
            </div>

            <!-- user right notification -->
            <ul class="navbar-list">
                <li>
                    <a href="#" class="search-toggle iq-waves-effect bg-primary text-white">
                        <img src="{{ asset('public/frontend') }}/images/user/1.jpg" class="img-fluid" alt="user">
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
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
                                    <a class="iq-bg-danger iq-sign-btn" href="sign-in.html" role="button">Sign out<i
                                            class="ri-login-box-line ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- end user right notification -->

        </nav>
    </div>
</div>
<!-- TOP Nav Bar END -->
