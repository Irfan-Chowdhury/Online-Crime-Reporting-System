 <!-- Side Navbar -->
 <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        {{-- <div class="sidenav-header-inner text-center"><img src="img/user/avatar-7.jpg" alt="person" class="img-fluid rounded-circle"> --}}
        <div class="sidenav-header-inner text-center"><img src="{{asset('uploads/users/'.Auth::user()->image)}}" alt="person" class="img-fluid rounded-circle">
          
          {{-- @if (auth()->check())  
            <h2 class="h5"> {{ Auth::user()->name }}</h2><span>Web Developer</span>
          @endif --}}             {{--working --}}          
          
          {{-- @guest  
            <h2 class="h5"> {{ Auth::user()->name }}</h2><span>Web Developer</span>
          @endauth --}}           {{--not working--}}

          {{-- @auth
            <h2 class="h5"> {{ Auth::user()->name }}</h2><span>Web Developer</span>
          @endauth  --}}         {{--working --}}
          

            <h2 class="h5"> {{Auth::user()->name}}</h2><span>Web Developer</span> {{--working --}}
                                  
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main Section</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href="{{route('user.dashboard')}}"><i class="icon-home"></i>Home</a></li>
          <li><a href="{{route('user.all_mostWanted')}}"> <i class="icon-home"></i>View Most Wanted</a></li>
          <li><a href="{{route('user.emergency.create')}}"><i class="icon-home"></i>Emergency Help</a></li>

          {{-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li> --}}
        </ul>
      </div>
      <div class="admin-menu">
        <h5 class="sidenav-heading">Complain Section</h5>
        <ul id="side-admin-menu" class="side-menu list-unstyled"> 
          <li><a href="#complain" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Your Complain </a>
              <ul id="complain" class="collapse list-unstyled ">
                <li><a href="{{route('user.complain.create')}}">Add New Complain</a></li>
                <li><a href="{{route('user.complain.index')}}">Manage Complain List</a></li>
              </ul>
          </li>
          <li><a href="#missingPerson" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Missing Person</a>
              <ul id="missingPerson" class="collapse list-unstyled ">
                <li><a href="{{route('user.missingPerson.create')}}">Add Missing Person</a></li>
                <li><a href="{{route('user.missingPerson.index')}}">Manage Missing Complain</a></li>
              </ul>
          </li>
          <li><a href="#missingOther" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Missing Other</a>
              <ul id="missingOther" class="collapse list-unstyled ">
                <li><a href="{{route('user.missingOther.create')}}">Add Missing Other</a></li>
                <li><a href="{{route('user.missingOther.index')}}">Manage Missing Other</a></li>
              </ul>
          </li>
          <li><a href="#feedback" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Feedback</a>
              <ul id="feedback" class="collapse list-unstyled ">
                <li><a href="{{route('user.feedback.create')}}">Give Feedback</a></li>
                {{-- <li><a href="{{route('user.feedback.index')}}">Manage Missing Other</a></li> --}}
              </ul>
          </li>
        </ul>
      </div>
      <div class="admin-menu">
        <h5 class="sidenav-heading">Account Setting</h5>
        <ul id="side-admin-menu" class="side-menu list-unstyled">
          <li><a href="{{route('user.profile.index')}}">Profile</a></li>
          <li><a href="{{route('user.password_change')}}">Change Password</a></li>
        </ul>
      </div>
    </div>
  </nav>