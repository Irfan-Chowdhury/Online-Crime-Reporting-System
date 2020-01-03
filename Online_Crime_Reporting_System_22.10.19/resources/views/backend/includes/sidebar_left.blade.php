<!-- Sidebar -->
    <!-- <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar"> -->
      <ul class="navbar-nav bgcolor sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        
          <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Admin Panel
        </div>

        <!-- Nav Item - Admins Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Admins" aria-expanded="true" aria-controls="Admins">
            <i class="far fa-user"></i>
            <span>Admins</span>
          </a>
          <div id="Admins" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('admin.index')}}">Manage Admins</a>
              <a class="collapse-item" href="{{route('admin.create')}}">Add Admins</a>
            </div>
          </div>
        </li>


        <!-- Nav Item - Complain_Category Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#CrimeCategory" aria-expanded="true" aria-controls="CrimeCategory">
            <i class="fas fa-fw fa-folder"></i>
            <span>Crime Category</span>
          </a>
          <div id="CrimeCategory" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('admin.crimeCategory.index')}}">Manage Crime Category</a>
              <a class="collapse-item" href="{{route('admin.crimeCategory.create')}}">Add Category</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - NewsTips Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#NewsTips" aria-expanded="true" aria-controls="NewsTips">
            <i class="fas fa-newspaper"></i>
            <span>NewsTips</span>
          </a>
          <div id="NewsTips" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('admin.newstips.index')}}">Manage Nes/Tips</a>
              <a class="collapse-item" href="{{route('admin.newstips.create')}}">Add News/Tips</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Criminal Records Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#criminalRecords" aria-expanded="true" aria-controls="criminalRecords">
            <i class="fas fa-dragon"></i>
            <span>Criminal Records</span>
          </a>
          <div id="criminalRecords" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.criminalRecords.create')}}">Add Criminal</a>
                <a class="collapse-item" href="{{route('admin.criminalRecords.index')}}">Manage Criminal Records</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Missing Person Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#missingPerson" aria-expanded="true" aria-controls="missingPerson">
            <i class="fas fa-fw fa-folder"></i>
            <span>Missing Person</span>
          </a>
          <div id="missingPerson" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.missingPerson.create')}}">Add Missing Person</a>
                <a class="collapse-item" href="{{route('admin.missingPerson.index')}}">Manage Missing Person</a>
            </div>
          </div>
        </li>


        <!-- Nav Item - Missing Others Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#missingOthers" aria-expanded="true" aria-controls="missingOthers">
            <i class="fas fa-fw fa-folder"></i>
            <span>Missing Others</span>
          </a>
          <div id="missingOthers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.missingOther.create')}}">Add Missing Others</a>
                <a class="collapse-item" href="{{route('admin.missingOther.index')}}">Manage Missing Others</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Missing Other Category Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#otherMissingCategory" aria-expanded="true" aria-controls="otherMissingCategory">
            <i class="fas fa-fw fa-folder"></i>
            <span>Other Missing Category</span>
          </a>
          <div id="otherMissingCategory" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.otherMissingCategory.create')}}">Add Missing Category</a>
                <a class="collapse-item" href="{{route('admin.otherMissingCategory.index')}}">Manage Missing Category</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          User Panel
        </div>

        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users Info</span>
          </a>
          <div id="users" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.usersInfo.index')}}">Manage Users</a>
            </div>
          </div>
        </li>


        <!-- Nav Item - Users Coplain Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usersComplain" aria-expanded="true" aria-controls="usersComplain">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users Complain</span>
          </a>
          <div id="usersComplain" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.userComplain.index')}}">Manage Users Complain</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Users Feedback Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usersFeedback" aria-expanded="true" aria-controls="usersFeedback">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users Feedback</span>
          </a>
          <div id="usersFeedback" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.userFeedback.index')}}">Manage Users Feedback</a>
            </div>
          </div>
        </li>


        <!-- Nav Item - Users Emergency Help Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#emrgencyHelp" aria-expanded="true" aria-controls="emrgencyHelp">
            <i class="fas fa-fw fa-folder"></i>
            <span>Emergency Help</span>
          </a>
          <div id="emrgencyHelp" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.emergency.index')}}">Manage Emergency</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="login.html">Login</a>
              <a class="collapse-item" href="register.html">Register</a>
              <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Other Pages:</h6>
              <a class="collapse-item" href="404.html">404 Page</a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
          </div>
        </li>
  
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
  
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->













































{{-- <!-- Sidebar -->
    <!-- <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar"> -->
            <ul class="navbar-nav bgcolor sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                      <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                      </div>
                      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
                    </a>
              
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">
              
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('admin.dashboard')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                    </li>
              
                    <!-- Divider -->
                    <hr class="sidebar-divider">
              
                    <!-- Heading -->
                    <div class="sidebar-heading">
                      Interface
                    </div>
              
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Components</span>
                      </a>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Custom Components:</h6>
                          <a class="collapse-item" href="buttons.html">Buttons</a>
                          <a class="collapse-item" href="cards.html">Cards</a>
                        </div>
                      </div>
                    </li>
              
                    <!-- Nav Item - Utilities Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities</span>
                      </a>
                      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Custom Utilities:</h6>
                          <a class="collapse-item" href="utilities-color.html">Colors</a>
                          <a class="collapse-item" href="utilities-border.html">Borders</a>
                          <a class="collapse-item" href="utilities-animation.html">Animations</a>
                          <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                      </div>
                    </li>
              
                    <!-- Divider -->
                    <hr class="sidebar-divider">
              
                    <!-- Heading -->
                    <div class="sidebar-heading">
                      Admin Panel
                    </div>

                    <!-- Nav Item - Admins Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Admins" aria-expanded="true" aria-controls="Admins">
                        <i class="far fa-user"></i>
                        <span>Admins</span>
                      </a>
                      <div id="Admins" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <a class="collapse-item" href="{{route('admin.index')}}">Manage Admins</a>
                          <a class="collapse-item" href="{{route('admin.create')}}">Add Admins</a>
                        </div>
                      </div>
                    </li>


                    <!-- Nav Item - Complain_Category Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#CrimeCategory" aria-expanded="true" aria-controls="CrimeCategory">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Crime Category</span>
                      </a>
                      <div id="CrimeCategory" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <a class="collapse-item" href="{{route('admin.crimeCategory.index')}}">Manage Crime Category</a>
                          <a class="collapse-item" href="{{route('admin.crimeCategory.create')}}">Add Category</a>
                        </div>
                      </div>
                    </li>

                    <!-- Nav Item - NewsTips Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#NewsTips" aria-expanded="true" aria-controls="NewsTips">
                        <i class="fas fa-newspaper"></i>
                        <span>NewsTips</span>
                      </a>
                      <div id="NewsTips" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <a class="collapse-item" href="{{route('admin.newstips.index')}}">Manage Nes/Tips</a>
                          <a class="collapse-item" href="{{route('admin.newstips.create')}}">Add News/Tips</a>
                        </div>
                      </div>
                    </li>

                    <!-- Nav Item - Criminal Records Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#criminalRecords" aria-expanded="true" aria-controls="criminalRecords">
                        <i class="fas fa-dragon"></i>
                        <span>Criminal Records</span>
                      </a>
                      <div id="criminalRecords" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route('admin.criminalRecords.create')}}">Add Criminal</a>
                            <a class="collapse-item" href="{{route('admin.criminalRecords.index')}}">Manage Criminal Records</a>
                        </div>
                      </div>
                    </li>

                    <!-- Nav Item - Missing Person Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#missingPerson" aria-expanded="true" aria-controls="missingPerson">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Missing Person</span>
                      </a>
                      <div id="missingPerson" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route('admin.missingPerson.create')}}">Add Missing Person</a>
                            <a class="collapse-item" href="{{route('admin.missingPerson.index')}}">Manage Missing Person</a>
                        </div>
                      </div>
                    </li>

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                      </a>
                      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Login Screens:</h6>
                          <a class="collapse-item" href="login.html">Login</a>
                          <a class="collapse-item" href="register.html">Register</a>
                          <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                          <div class="collapse-divider"></div>
                          <h6 class="collapse-header">Other Pages:</h6>
                          <a class="collapse-item" href="404.html">404 Page</a>
                          <a class="collapse-item" href="blank.html">Blank Page</a>
                        </div>
                      </div>
                    </li>
              
                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                      <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                    </li>
              
                    <!-- Nav Item - Tables -->
                    <li class="nav-item">
                      <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                    </li>
              
                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">
              
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                      <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
              
                  </ul>
                  <!-- End of Sidebar --> --}}