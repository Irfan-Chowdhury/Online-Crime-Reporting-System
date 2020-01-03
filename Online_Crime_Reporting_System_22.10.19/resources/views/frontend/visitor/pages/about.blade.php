@extends('frontend.visitor.layouts.master')

@section('title','About')
    
@section('content')

<!-- ABOUT US Page Header -->
<section id="page-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light">About <i class="text-warning"><b>OCRS</b></i></h1>
                <p class="lead">Online Crime Reporting System</p>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO Section -->
<section id="about-info" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h3>What is OCRS ?</h3>
                    <p class="lead text-justify">The project titled as “Online Crime Reporting System“is a web based application.
                            This software provides facility for reporting online crimes, complaints,
                            missing persons, show most wanted person details , show snatchers, show
                            unidentified dead bodies, stolen vehicles as well as messaging.
                    </p>
                    <p class="lead text-justify">Any Number of clients can connect to the server. Each user first makes
                            their login to sever to show their availability. The server can be any Web
                            Server.
                    </p>
                    <p class="lead text-justify">The Online Crime Report project is to provide all crime management
                            solutions which are easily accessible to everyone. The Crime application
                            starts with the common people who want to log a complaint through the
                            website so it can be very useful for police department to find out the
                            problem in the society without people are coming to the police station
                            every time.</p>

                    <!-- <div class="follow_me">
                        <h4>Follow Me:</h4>
                        <div class="social_icons">
                            <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-6 text-center">
                    <!-- <img src="img/image4.jpeg" class="img-fluid rounded-circle" alt=""> -->
                    <img src="{{asset('coder_foundation/img/OCRS.jpg')}}" class="img-fluid rounded-circle" alt="">
                </div>
            </div>
        </div>
    </section>


@endsection
