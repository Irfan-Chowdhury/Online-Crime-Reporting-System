@extends('frontend.user.layouts.master')

@section('Main_Content')

        <div class="container mt-5">
            <h1 class="text-center text-info display-3 ">Most Wanted Criminal</h1>
            <div class="row mt-5">

                @foreach ($criminalRecords as $criminalRecord)
                    @if ($criminalRecord->crimeCategory_id==1)
                        <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{asset('uploads/criminals_images/'.$criminalRecord->image)}}" class="card-img-top" height="250px" width="300px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$criminalRecord->name}}</h5>
                                        <p class="card-text">{{$criminalRecord->description}}</p>
                                        <a href="{{route('user.view_mostWanted',$criminalRecord->id)}}" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                @endforeach
                

            </div>
        </div>
    
@endsection