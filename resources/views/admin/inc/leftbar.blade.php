<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href="">Admin Panel</a></div>
<div class="sl-sideleft">
    <div class="sl-sideleft-menu">
        <a href="{{ url('/') }}" class="sl-menu-link" target="_blank">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">visit Site</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ url('admin/home') }}" class="sl-menu-link @yield('dasboard')">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="#" class="sl-menu-link @yield('Course_section')">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                <span class="menu-item-label">COURSE MANAGE</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('course.index') }}" class="nav-link @yield('course_text')">Create
                    Course</a></li>
            <li class="nav-item"><a href="{{ route('course.list') }}" class="nav-link @yield('course_text')">Course
                    List</a></li>
            <li class="nav-item"><a href="{{ route('categories.list') }}" class="nav-link @yield('course_text')">Course
                    Categories</a></li>
        </ul>


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


    </div><!-- sl-sideleft-menu -->
    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
