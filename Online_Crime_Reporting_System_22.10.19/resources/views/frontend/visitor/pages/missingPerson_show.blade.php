@extends('frontend.visitor.layouts.master')

@section('title','Details Missing Person')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">Details Missing Person</h1>
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
                                    @if ($missing_person->admin_id != NULL)
                                        <img src="{{asset('uploads/missing_person/admin/'.$missing_person->image)}}" class="card-img-top" alt="...">
                                    @else 
                                        <img src="{{asset('uploads/missing_person/user/'.$missing_person->image)}}" class="card-img-top" alt="...">
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
                            <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$missing_person->created_at->format('F d, Y')}}</i></small></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>Name: </b>{{$missing_person->name}}</p>
                            <p class="card-text"><b>Gender: </b>{{$missing_person->gender}}</p>
                            <p class="card-text"><b>Age: </b>{{$missing_person->age}}</p>
                            <p class="card-text"><b>Physical Details: </b>{{$missing_person->physical_details}}</p>
                            <p class="card-text"><b>About: </b>{{$missing_person->description}}</p>
                            <p class="card-text"><b>address: </b>{{$missing_person->address}}</p>
                            <p class="card-text"><b>Phone: </b>{{$missing_person->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection