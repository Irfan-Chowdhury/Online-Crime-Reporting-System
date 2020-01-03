@extends('frontend.visitor.layouts.master')

@section('title','Details Wanted Criminal')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">Details Most Wanted Criminal</h1>
            </div>
        </div>
    </div>
</section> 

<section class="forms">
        <div class="container">
            <div class="card-header d-flex align-items-center">
                {{-- <h1 class="text-info">View news</h1> --}}
            </div>
    
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="height:270px">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="work_img">
                                    <img src="{{asset('uploads/criminals_images/'.$mostWanted->image)}}" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$mostWanted->created_at->format('F d, Y')}}</i></small></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>Criminal Type: </b>{{$mostWanted->crimeCategory->crimeCategoryName}}</p>
                            <p class="card-text"><b>Missing Name: </b>{{$mostWanted->name}}</p>
                            <p class="card-text"><b>Description: </b>{{$mostWanted->description}}</p>
                            <p class="card-text"><b>Address: </b>{{$mostWanted->address}}</p>
                            <p class="card-text"><b>phone: </b>{{$mostWanted->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection