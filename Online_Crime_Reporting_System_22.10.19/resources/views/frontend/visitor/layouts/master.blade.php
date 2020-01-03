<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.visitor.includes.header')

</head>
<body>

    @include('frontend.visitor.includes.navbar')

         @yield('content')

    @include('frontend.visitor.includes.footer')

</body>
</html>














{{-- <!DOCTYPE html>
<html lang="en">
<head> --}}
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glozzom</title>
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('coder_foundation/css/uikit.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('coder_foundation/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="css/uikit.min.css"> -->
    <link rel="stylesheet" href="{{asset('coder_foundation/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('coder_foundation/img/icon.png')}}" type="image/x-icon"> --}}
{{-- </head>
<body> --}}
    
    <!-- NAVIGATION -->
    {{-- <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
        <div class="container">
            <a href="index.html" class="navbar-brand">Glozzom</a>
            <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link " href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_work.html">My Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> --}}

    {{-- <!-- Home - Carousel Slider -->
    <section id="showcase" class="bg-dark">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#myCarousel" class="active"></li>
                <li data-slide-to="1" data-target="#myCarousel"></li>
                <li data-slide-to="2" data-target="#myCarousel"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-img-1 active">
                    <div class="container">
                        <div class="carousel-caption mb-2 pb-2 mb-sm-5 pb-sm-5">
                            <h2 class="display-4 text-light">Graphics Design</h2>
                            <p class="lead">If you’re looking for creative graphic design inspiration, then take a look at the work and philosophies of famous designers — they’re talented, wise and iconic for a reason! Here are 17 great quotes by the top graphic designers of our time. 
                                </p>
                            <a href="#" class="btn btn-danger">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-img-2 ">
                    <div class="container">
                        <div class="carousel-caption mb-5 pb-5 text-right">
                            <h2 class="display-4 text-light">Responsive Web Design</h2>
                            <p class="lead">If you're already a front-end developer, well, pretend you're also wearing a pirate hat.</p>
                            <a href="#" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-img-3 ">
                    <div class="container">
                        <div class="carousel-caption mb-5 pb-5 text-left">
                            <h2 class="display-4 text-light">Web Developement</h2>
                            <p class="lead">We love what we do and we do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites.</p>
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#myCarousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <!-- Home Icon -->
    <section id="homeicon" class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2">
                    <i class="fa fa-gears"></i>
                    <h3 class="py-2">Turning Gears</h3>
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, maxime.</p>
                </div>
                <div class="col-md-4 my-2">
                    <i class="fa fa-cloud"></i>
                    <h3 class="py-2">Sending Data</h3>
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, maxime.</p>
                </div>
                <div class="col-md-4 my-2">
                    <i class="fa fa-cart-plus"></i>
                    <h3 class="py-2">Making Money</h3>
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, maxime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Home - Get Started -->
    <div id="getstarted" class="py-5 text-center text-light">
        <div class="dark-overlay">
            <div class="container">
                <div class="row">
                    <div class="col mt-5 pt-4">
                        <h3 class="text-light">Are You Ready To Get Started?</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quaerat voluptatem laboriosam vero recusandae repellendus? Impedit iure est sit voluptatum blanditiis cum sequi laudantium quod dicta, a quaerat vel, obcaecati!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Home -  Info Section -->
    <section id="homeinfo" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quaerat unde labore sequi facilis possimus nulla a! Aliquam, saepe illo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, praesentium!</p>
                    <a href="#" class="btn btn-outline-dark">Read More</a>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <img src="{{asset('coder_foundation')}}/img/image5.jpeg" class="img-fluid rounded" alt="XYZ">
                </div>
            </div>
        </div>
    </section>


    <!-- Home Video Section -->
    <section id="home-video" class="text-center text-light">
        <div class="dark-overlay">
            <div class="container">
                <div class="row">
                    <div class="col mt-5 pt-4">
                        <div uk-lightbox>
                            <a href="https://www.youtube.com/watch?v=43rTanJhQqM&list=PLm64fbD5OnxuWrqDWyObVkH_Y5R6Wg1wg&index=48" class="text-light">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <h2 class="mt-3 text-light">bootstrap 4 Crash Course</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Home - Photo Gallery -->

    <section id="gallery" class="py-5" uk-lightbox>
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Photo Gallery</h2>
                    <p class="lead">Check out our Photos</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div>
                            <a href="{{asset('coder_foundation')}}/img/image1.jpeg">
                            <img src="{{asset('coder_foundation')}}/img/image1.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a href="{{asset('coder_foundation')}}/img/image2.jpeg">
                            <img src="{{asset('coder_foundation')}}/img/image2.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a href="{{asset('coder_foundation')}}/img/image3.jpeg">
                            <img src="{{asset('coder_foundation')}}/img/image3.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row pt-md-4">
                <div class="col-md-4">
                    <div>
                        <a href="{{asset('coder_foundation')}}/img/image4.jpeg">
                            <img src="{{asset('coder_foundation')}}/img/image4.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a href="{{asset('coder_foundation')}}/img/image5.jpeg">
                            <img src="{{asset('coder_foundation')}}/img/image5.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a href="{{asset('coder_foundation')}}/img/image6.jpeg">
                            <img src="{{asset('coder_foundation')}}/img/image6.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NewsLetter -->

    <section id="newsletter" class="py-5 bg-dark text-light text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-light">Signup For Our Newsletter</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis magnam similique esse assumenda quasi repellendus illum perferendis quos aliquid possimus.</p>
                    <form action="" method="post" class="form-inline justify-content-center">
                        <label class="sr-only" for="name">Name</label>
                        <input type="text" placeholder="Enter Name" class="form-control m-2">

                        <label class="sr-only" for="name">Email</label>
                        <input type="text" placeholder="Enter Email"class="form-control m-2">
                        <input type="submit" class="btn btn-primary m-2" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Copyright -->
    {{-- <section id="copyright" class="text-center py-3 text-light">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <p class="lead mb-0">Copyright 2018 &copy; Irfan</p>
                </div>
            </div>
        </div>
    </section>




    <script src="{{asset('coder_foundation/js/fontawesome-all.js')}}"></script>
    <script src="{{asset('coder_foundation/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('coder_foundation/js/popper.min.js')}}"></script>
    <script src="{{asset('coder_foundation/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('coder_foundation/js/uikit.min.js')}}"></script>
    <script src="{{asset('coder_foundation/js/uikit-icons.min.js')}}"></script> --}}
{{-- </body>
</html> --}}








