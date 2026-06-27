
    <!--<style>-->
    <!--   .dropdown-toggle::after{    rotate: -90deg; margin-left: 9.255em;}-->
    <!--    .nav-item.show .dropdown-toggle::after{    rotate: 0deg;}-->
    <!--    .dropdown-menu.show{-->
    <!--        display: block;-->
    <!--        position: relative !important;-->
    <!--        transform: none !important;-->
    <!--        width: 100%;-->
    <!--        background: #33455c;-->
    <!--    }-->
    <!--</style>-->
    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{url('/website/img/main-logo.webp')}}" alt="kg2pg" class="brand-image elevation-3" style="max-height: 65px">
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="padding-top: 40px;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
              <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p style="margin-top:10px;">Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/our-partners')}}" class="nav-link">
                  <i class="nav-icon fas fa-handshake"></i>
                  <p>Top Colleges</p>
                </a>
              </li>

              <!-- <li class="nav-item">
                <a href="{{url('/admin/team')}}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Team</p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{url('admin/landing-page-enquiries')}}" class="nav-link {{ request()->is('admin/landing-page-enquiries') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>Landing Page Enquiries</p>
                </a>
              </li> -->
              
              <!-- <li class="nav-item">
                <a href="{{url('admin/webinar-enquiries')}}" class="nav-link {{ request()->is('admin/webinar-enquiries') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-laptop"></i>
                  <p>Webinar Enquiries</p>
                </a>
              </li> -->
              
              <!-- <li class="nav-item">
                <a href="{{url('admin/mailer-enquiries')}}" class="nav-link {{ request()->is('admin/mailer-enquiries') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>Mailer Enquiries</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('admin/scholarship-enquiries')}}" class="nav-link {{ request()->is('admin/scholarship-enquiries') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>Scholarship Enquiries</p>
                </a>
              </li> -->
<!--               
              <li class="nav-item">
                <a href="{{url('admin/qna-enquiries')}}" class="nav-link {{ request()->is('admin/qna-enquiries') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-question-circle"></i>
                  <p>QNA - Website</p>
                </a>
              </li> -->
              
              <li class="nav-item">
                <a href="{{url('admin/enquiries')}}" class="nav-link {{ request()->is('admin/enquiries') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>Enquiries</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/contacts')}}" class="nav-link {{ request()->is('admin/contacts') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-phone"></i>
                  <p>Contact Enquiries</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/registrations')}}" class="nav-link {{ request()->is('admin/registrations') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Registrations</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('admin/blogs')}}" class="nav-link {{ request()->is('admin/blogs') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Blogs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/news')}}" class="nav-link {{ request()->is('admin/news') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-file"></i>
                  <p>News</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('admin/entrance-exams')}}" class="nav-link {{ request()->is('admin/entrance-exams') || request()->is('admin/entrance-exams/*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>Entrance Exams</p>
                </a>
              </li>
              
              <li class="nav-item {{ request()->is('admin/departments') || request()->is('admin/departments/*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('admin/departments') || request()->is('admin/departments/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                    Courses
                    <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin/departments')}}" class="nav-link {{ request()->is('admin/departments') || request()->is('admin/departments/*') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Departments</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{url('admin/courses')}}" class="nav-link {{ request()->is('admin/courses') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Courses</p>
                        </a>
                    </li> -->
                </ul>
              </li>
              <li class="nav-item {{ request()->is('admin/colleges') || request()->is('admin/colleges/*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('admin/colleges') || request()->is('admin/colleges/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-university"></i>
                    <p>
                    Colleges
                    <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin/colleges')}}" class="nav-link {{ request()->is('admin/colleges') || request()->is('admin/colleges/*') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Colleges</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('admin/states') || request()->is('admin/schools') || request()->is('admin/schools/*') || request()->is('admin/classes') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('admin/states') || request()->is('admin/schools') || request()->is('admin/schools/*') || request()->is('admin/classes') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-university"></i>
                    <p>
                    Schools
                    <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin/states')}}" class="nav-link {{ request()->is('admin/states') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>States</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/classes')}}" class="nav-link {{ request()->is('admin/classes') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Classes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/schools')}}" class="nav-link {{ request()->is('admin/schools') || request()->is('admin/schools/*') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>School</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('admin/countries') || request()->is('admin/abroad-colleges') ||request()->is('admin/abroad-colleges/*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ request()->is('admin/countries') || request()->is('admin/abroad-colleges') || request()->is('admin/abroad-colleges/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-university"></i>
                    <p>
                    MBBS Abroad
                    <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin/countries')}}" class="nav-link {{ request()->is('admin/countries') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Countries</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/abroad-colleges')}}" class="nav-link {{ request()->is('admin/abroad-colleges')  || request()->is('admin/abroad-colleges/*') ? 'active' : '' }}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Colleges</p>
                        </a>
                    </li>
                </ul>
              </li>

              <!-- <li class="nav-header">Preferences</li> -->
              <li class="nav-item">
                <a href="{{url('admin/change-password')}}" class="nav-link {{ request()->is('admin/change-password') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>Change Password</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>