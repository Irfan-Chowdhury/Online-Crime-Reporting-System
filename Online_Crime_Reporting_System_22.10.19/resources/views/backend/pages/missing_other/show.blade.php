@extends('backend.layouts.mastertemplate')

@section('title')
    Missing- {{$missingOther->missing_category->missingCategoryName}}
@endsection

@section('allPageContent')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Missing Details</h1>
        </div>

        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{url('uploads/missing_others',$missingOther->image)}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text"><b>Missing Category: </b>{{$missingOther->missing_category->missingCategoryName}}</p>
                        <p class="card-text"><b>Missing Title: </b>{{$missingOther->missing_title}}</p>
                        <p class="card-text"><b>Owner Name: </b>{{$missingOther->owner_name}}</p>
                        <p class="card-text"><b>Desciption: </b>{{$missingOther->description}}</p>
                        <p class="card-text"><b>Address: </b>{{$missingOther->address}}</p>
                        <p class="card-text"><b>Phone: </b>{{$missingOther->phone}}</p>
                        <p class="card-text"><b>Status: </b>{{$missingOther->status}}</p>
                        <p class="card-text"><b>Show:</b>{{$missingOther->show}}</p>
                        <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$missingOther->created_at->format('F d, Y')}}</i></small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

@endsection