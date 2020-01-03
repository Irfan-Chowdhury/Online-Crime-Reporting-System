@extends('frontend.visitor.layouts.master')

@section('title','Most Wanted')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                    <div class="display-4 text-center text-light"><strong>Most Wanted Criminal</strong></div><hr>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container mt-5">
        
        <div class="row">
            @foreach ($criminal_records as $criminalRecord)
                 @if ($criminalRecord->show == "public" && $criminalRecord->status=="not_found" ) 
                    <div class="mt-2 col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="work_img">
                                <img src="{{asset('uploads/criminals_images/'.$criminalRecord->image)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $criminalRecord->name}}</h5>
                                    <p class="card-text"><small class="text-muted"><i><b>Last Updated:</b> {{$criminalRecord->created_at->format('F d, Y')}}</small></i></p>
                                    <a class="btn btn-primary" href="{{route('visitor.MostWanted_show',$criminalRecord->id)}}">Details</a>
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