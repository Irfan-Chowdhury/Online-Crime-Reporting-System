@extends('backend.layouts.mastertemplate')

@section('title', 'Criminal Profile')

@section('allPageContent')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Criminal Profile</h1>
        </div>

        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{url('uploads/criminals_images',$criminal_records->image)}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>Criminal Type: </b><i>{{$criminal_records->crimeCategory->crimeCategoryName}}</i> </h5>
                        <p class="card-text"><b>Criminal Name: </b>{{$criminal_records->name}}</p>
                        <p class="card-text"><b>Crime Description: </b>{{$criminal_records->description}}</p>
                        <p class="card-text"><b>Address: </b>{{$criminal_records->address}}</p>
                        <p class="card-text"><b>Status: </b>{{$criminal_records->status}}</p>
                        <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$criminal_records->created_at->format('F d, Y')}}</i></small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

@endsection