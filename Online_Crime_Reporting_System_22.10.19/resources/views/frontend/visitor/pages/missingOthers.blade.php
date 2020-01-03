@extends('frontend.visitor.layouts.master')

@section('title','Missing Others')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                    <div class="display-4 text-center text-light"><strong> These are Missing</strong></div><hr>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-10"></div>
            <div class="col-2">
                <a href="{{route('visitor.foundOthers')}}" class="btn btn-primary">Found Things >></a>
            </div>
        </div>
        <div class="row">
            @foreach ($missing_others as $missingOther)
                 @if ($missingOther->show == "public" && $missingOther->status=="not_found" ) 
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="work_img">
                                @if ($missingOther->admin_id != NULL)
                                    <img src="{{asset('uploads/missing_others/'.$missingOther->image)}}" class="card-img-top" alt="...">
                                @else 
                                    <img src="{{asset('uploads/missing_others/user/'.$missingOther->image)}}" class="card-img-top" alt="...">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $missingOther->missing_title}}</h5>
                                    <p class="card-text"><small class="text-muted"><i><b>Last Updated:</b> {{$missingOther->created_at->format('F d, Y')}}</small></i></p>
                                    <a class="btn btn-primary" href="{{route('visitor.missingOther_show',$missingOther->id)}}">Details</a>
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