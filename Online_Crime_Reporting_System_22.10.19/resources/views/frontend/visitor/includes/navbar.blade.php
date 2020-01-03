<!-- NAVIGATION -->
<nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
        <div class="container">
            <a href="index.html" class="navbar-brand text-info">OCRS</a>
            <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto" id="navcolor">
                    <li class="nav-item"><a class="nav-link " href="{{route('visitor.index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('visitor.about')}}">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            News/Tips
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('visitor.news')}}">News</a>
                            <a class="dropdown-item" href="#">Tips</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('visitor.recentIncident')}}">Complain</a></li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Missing
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('visitor.missingPerson')}}">People</a>
                            <a class="dropdown-item" href="{{route('visitor.missingOthers')}}">Others</a>
                        </div>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{route('visitor.crimes')}}">Recent Crimes</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('visitor.MostWanted')}}">Most Wanted</a></li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Crime Types
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Robery</a>
                            <a class="dropdown-item" href="#">Most Wanted</a>
                            <a class="dropdown-item" href="#">Eve Teasing</a>
                            <a class="dropdown-item" href="#">Murder</a>
                            <a class="dropdown-item" href="#">Cyber Crime</a>
                        </div>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('visitor.FAQ')}}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('userRegistration')}}">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>