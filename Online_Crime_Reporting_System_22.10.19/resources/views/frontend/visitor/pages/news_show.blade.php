@extends('frontend.visitor.layouts.master')

@section('title','Show News')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">News</h1>
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
                                    <img src="{{asset('uploads/news_tips/'.$news->image_video)}}" class="d-block w-100" alt="...">
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
                            <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$news->created_at->format('F d, Y')}}</i></small></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>news Title: </b>{{$news->title}}</p>
                            <p class="card-text"><b>Description: </b>{{$news->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection