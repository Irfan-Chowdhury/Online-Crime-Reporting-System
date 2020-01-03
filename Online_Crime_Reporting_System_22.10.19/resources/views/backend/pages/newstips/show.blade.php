@extends('backend.layouts.mastertemplate')

@section('allPageContent')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">News/Tips</h1>
    </div>


    <div class="container mt-5">
        @if ($newstips->type=='news')
            <h1 class="text-center">Show the News</h1>
        @else
            <h1 class="text-center">Show the Tips</h1>
        @endif
        <hr>

        <div class="card mt-5 mb-3">
            <img class="card-img-top" src="{{url('uploads/news_tips/file_5d591bcc21db24.19811162W2dxZwDRpV.jpg')}}"  width="50px" height="80px" alt="" >
            <div class="card-body">
                <h3 class="card-title"><b>Title:</b> {{$newstips->title}} </h3>
                <h5 class="card-title"><b>Slug:</b> {{$newstips->slug}}</h5>
                <h5 class="card-title"><b>Type:</b> {{$newstips->type}}</h5>
                <p class="card-text"><b>Description: </b>{{$newstips->description}}</p>
                <p class="card-text"><small class="text-muted"><b>Post Uploaded {{$newstips->created_at->format('F d, Y | h:s A')}}</b></small></p>
            </div>
        </div>

    </div>

@endsection