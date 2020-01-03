@extends('frontend.visitor.layouts.master')

@section('title','Found Person')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                    <div class="display-4 text-center text-light"><strong>These People were Found</strong></div><hr>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-2">
                <a href="{{route('visitor.missingPerson')}}" class="btn btn-primary"> << Missing People</a>
            </div>
            <div class="col-10"></div>
        </div>
        <div class="row">
            @php $i=1 @endphp
            @foreach ($missing_persons as $missingPerson)
                 @if ($missingPerson->show == "public" && $missingPerson->status=="found") 
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="work_img">
                                @if ($missingPerson->admin_id != NULL)
                                    <img src="{{asset('uploads/missing_person/admin/'.$missingPerson->image)}}" class="card-img-top" alt="...">
                                @else 
                                    <img src="{{asset('uploads/missing_person/user/'.$missingPerson->image)}}" class="card-img-top" alt="...">
                                @endif
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $missingPerson->name}}</h5>
                                    <p class="card-text"><small class="text-muted"><i><b>Last Updated:</b> {{$missingPerson->created_at->format('F d, Y')}}</small></i></p>
                                    <a class="btn btn-primary" href="{{route('visitor.foundPerson_show',$missingPerson->id)}}">Details</a>
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