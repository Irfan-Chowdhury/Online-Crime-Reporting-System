@extends('backend.layouts.mastertemplate')

@section('title', 'Missing Person Profile')

@section('allPageContent')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Missing Person Profile</h1>
        </div>

        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{url('uploads/missing_person/admin',$missing_Person->image)}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text"><b>Name: </b>{{$missing_Person->name}}</p>
                        <p class="card-text"><b>Gender: </b>{{$missing_Person->gender}}</p>
                        <p class="card-text"><b>Age: </b>{{$missing_Person->age}}</p>
                        <p class="card-text"><b>Physical Details: </b>{{$missing_Person->physical_details}}</p>
                        <p class="card-text"><b>About Person: </b>{{$missing_Person->description}}</p>
                        <p class="card-text"><b>Address: </b>{{$missing_Person->address}}</p>
                        <p class="card-text"><b>Phone: </b>{{$missing_Person->phone}}</p>
                        <p class="card-text"><b>Status: </b>{{$missing_Person->status}}</p>
                        <p class="card-text"><b>Show:</b>{{$missing_Person->show}}</p>
                        <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$missing_Person->created_at->format('F d, Y')}}</i></small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

@endsection