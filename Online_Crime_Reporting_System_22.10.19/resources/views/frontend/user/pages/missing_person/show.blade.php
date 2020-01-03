@extends('frontend.user.layouts.master')

@section('title','Details Missing Person ')
    
@section('Main_Content')


{{-- <section class="forms"> --}}
        <div class="container">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Details Missing Person</h1>
            </div>
                
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card ">
                        <img src="{{asset('uploads/missing_person/user/'.$missing_Person->image)}}" class="card-img-top w-50" height="200px"  alt="...">
                        <div class="card-body">
                            <button class="mt-2 btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Click Here To Read 
                            </button>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <p class="card-text"><b>Name: </b>{{$missing_Person->name}}</p>
                                    <p class="card-text"><b>Gender: </b>{{$missing_Person->gender}}</p>
                                    <p class="card-text"><b>Age: </b>{{$missing_Person->age}}</p>
                                    <p class="card-text"><b>Physical Details: </b>{{$missing_Person->physical_details}}</p>
                                    <p class="card-text"><b>Description: </b>{{$missing_Person->description}}</p>
                                    <p class="card-text"><b>Address: </b>{{$missing_Person->address}}</p>
                                    <p class="card-text"><b>Phone: </b>{{$missing_Person->phone}}</p>
                                    <p class="card-text"><b>Status: </b>{{$missing_Person->status}}</p>
                                    <p class="card-text"><b>Show: </b>{{$missing_Person->show}}</p>
                                    <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$missing_Person->created_at->format('F d, Y')}}</i></small></p>                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
                
                      


{{-- 
                <div>
                    <button class="mt-2 btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Click Here To Read 
                    </button>
                    
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <p class="card-text"><b>missing_Person Type: </b>{{$complain->crimeCategory->crimeCategoryName}}</p>
                            <p class="card-text"><b>Complain Title: </b>{{$complain->title}}</p>
                            <p class="card-text"><b>Description: </b>{{$complain->description}}</p>
                            <p class="card-text"><b>City: </b>{{$complain->city->cityName}}</p>

                            <p class="card-text"><b>Late Long: </b>
                            <a href="{{$complain->late_long}}" target="_blank">Click Here</a></p>

                            <p class="card-text"><b>Address: </b>{{$complain->address}}</p>

                            <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$missing_Person->created_at->format('F d, Y')}}</i></small></p>                    
                        </div>
                    </div>
                </div> --}}


            </div>
{{-- </section> --}}

@endsection