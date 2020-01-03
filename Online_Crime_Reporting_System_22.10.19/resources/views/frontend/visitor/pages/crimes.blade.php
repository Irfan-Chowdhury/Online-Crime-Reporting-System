@extends('frontend.visitor.layouts.master')

@section('title','Crime Types')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                    <div class="display-4 text-center text-light"><strong>Recent Crimes</strong></div><hr>
            </div>
        </div>
    </div>
</section>



<section style="margin-bottom:250px">
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group form-inline">
                    <div class="btn btn-primary">Crime Types : </div>

                    <a href="">
                        <select name="crimeCategory_id" class="ml-2 form-control">
                                <option selected>--- Select ---</option>
                            @foreach ($crimeCategories as $CrimeCategory)
                                <option value="{{$CrimeCategory->id}}">{{$CrimeCategory->crimeCategoryName}}</option>
                            @endforeach
                        </select> 
                    </a>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="ml-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-primary" aria-current="page">Crimes</li>
                            <li class="breadcrumb-item active" aria-current="page">All</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            {{-- <form action="{{route('')}}">
            </form> --}}
        </div>

        <div class="row">
            @foreach ($criminal_records as $criminalRecords)
                 @if ($criminalRecords->show == "public" && $criminalRecords->status=="not_found" ) 
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="work_img">
                                <img src="{{asset('uploads/criminals_images/'.$criminalRecords->image)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $criminalRecords->missing_title}}</h5>
                                    <p class="card-text"><small class="text-muted"><i><b>Last Updated:</b> {{$criminalRecords->created_at->format('F d, Y')}}</small></i></p>
                                    <a class="btn btn-primary" href="">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    
</section>


    
@endsection