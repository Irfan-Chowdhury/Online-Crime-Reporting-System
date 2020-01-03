@extends('frontend.visitor.layouts.master')

@section('title','Details Found Missing Things')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">Details Found Things</h1>
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
                                    @if ($missing_other->admin_id != NULL)
                                        <img src="{{asset('uploads/missing_others/'.$missing_other->image)}}" class="card-img-top" alt="...">
                                    @else 
                                        <img src="{{asset('uploads/missing_others/user/'.$missing_other->image)}}" class="card-img-top" alt="...">
                                    @endif
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
                            {{-- <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$missing_other->created_at->format('F d, Y')}}</i></small></p> --}}
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>Missing Type: </b>{{$missing_other->missing_category->missingCategoryName}}</p>
                            <p class="card-text"><b>Title: </b>{{$missing_other->missing_title}}</p>
                            <p class="card-text"><b>Founder Name: </b>{{$missing_other->owner_name}}</p>
                            <p class="card-text"><b>phone: </b>{{$missing_other->phone}}</p>
                            <p class="card-text"><b>How to you collect ? :</b> After Verifing you ,then you can get your things</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection