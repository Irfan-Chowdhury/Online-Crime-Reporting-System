@extends('frontend.visitor.layouts.master')

@section('title','Home')
    

@section('content')

    <!-- Home - Carousel Slider -->
    <section id="showcase"  class="bg-dark">
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
                                <h2 class="display-4 text-light">Online Crime Reporting System</h2>
                                <p class="lead">“When a man is denied the right to live the life he believes in, he has no choice but to become an outlaw.” </p>
                                <p><b>― Nelson Mandela</b></p>    
                                    
                                <a href="#" class="btn btn-danger">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-img-2 ">
                        <div class="container">
                            <div class="carousel-caption mb-5 pb-5 text-right">
                                <h2 class="display-4 text-light">Online Crime Reporting System</h2>
                                <p class="lead">“Don't compromise yourself - you're all you have.” </p>
                                <p><b>― John Grisham, The Rainmaker</b></p>
                                <a href="#" class="btn btn-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-img-3 ">
                        {{-- <div class="container">
                            <div class="carousel-caption mb-5 pb-5 text-left">
                                <h2 class="display-4 text-dark">Online Crime Reporting System</h2>
                                <p class="lead">“Poverty is the parent of revolution and crime.”</p>
                                <p><b>― Aristotle</b></p>
                                <a href="#" class="btn btn-outline-light">Learn More</a>
                            </div>
                        </div> --}}
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

        <!-- WHAT WE DO Section -->
<section id="about-info" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h3>Features Of This Project</h3>
                <p class="lead text-justify">
                    <li>Provides the searching facilities based on various factors. Such as all crime management etc.</li>
                    <li>Online Crime Reporting System also manage the crime details</li>
                    <li>It tracks all the information of criminals</li>
                    <li>Manage the information of national breaking news for crime</li>
                    <li>Shows the information and description of the police department</li>
                    <li>To increase efficiency of managing the crime</li>
                    <li>It deals with monitoring the information and transactions or content</li>
                    <li>Manage the information of international crime</li>
                    <li>Editing, adding and updating of Records is improved which results in proper resource management of Online Crime Reporting System data.</li>
                    <li>Manage the information of crime news</li>
                    <li>Integration of all records of crime</li>
                    <li>Citizens not need to go police station to see the  criminals information.they can directly see information on site.</li>
                    <li>Visitor can easily get the information about the   crime and criminal.</li>
                    <li>Reduce the man power , and also reduce the time.</li>
                    <li>Member can view the current status of the criminal.</li>
                </p>

            </div>
            <div class="mt-5 col-md-6 text-center">
                <img src="{{asset('coder_foundation/img/Crime_Report.jpg')}}" class="mt-5 img-fluid rounded-circle" alt="">
            </div>
        </div>
    </div>
</section>
    
        <!-- Home Icon -->
        {{-- <section id="homeicon" class="py-5 text-center">
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
        </section>  --}}
    
        <!-- Home - Get Started -->
        {{-- <div id="getstarted" class="py-5 text-center text-light">
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
        </div> --}}
    
    
        
      <!-- Home -  Info Section -->
      {{-- <section id="homeinfo" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <h3>Lorem Ipsum Dolor Sit</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quaerat unde labore sequi facilis possimus nulla a! Aliquam, saepe illo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, praesentium!</p>
                        <a href="#" class="btn btn-outline-dark">Read More</a>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <img src="img/image5.jpeg" class="img-fluid rounded" alt="XYZ">
                    </div>
                </div>
            </div>
        </section> --}}
    
        <!-- Home Video Section -->
        {{-- <section id="home-video" class="text-center text-light">
            <div class="dark-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col mt-5 pt-4">
                            <div uk-lightbox>
                                <a href="https://www.youtube.com/watch?v=a2lIcZPW6oU" class="text-light">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <h2 class="mt-3 text-light">What is crime ?</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    
        <!-- NewsLetter -->
    
        {{-- <section id="newsletter"  class="py-5 bg-dark text-light text-center">
            <div class="container" >
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
 

@endsection