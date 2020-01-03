@extends('frontend.user.layouts.master')

@section('Main_Content')

        <div class="container mt-5">
            <h1 class="text-center text-info display-3 ">Most Wanted Criminal</h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{url('uploads/criminals_images/',$most_wanted_criminal->image)}}" class="card-img" alt="..." height="200px" width="250px">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text"><b>Name: </b>{{$most_wanted_criminal->name}}</p>
                        <p class="card-text"><b>Description : </b>{{$most_wanted_criminal->description}}</p>
                        <p class="card-text"><b>Address: </b>{{$most_wanted_criminal->address}}</p>
                        <p class="card-text"><b>Status: </b>{{$most_wanted_criminal->status}}</p>
                        <p class="card-text"><b>Show:</b>{{$most_wanted_criminal->show}}</p>
                        <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$most_wanted_criminal->created_at->format('F d, Y')}}</i></small></p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
@endsection