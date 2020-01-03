@extends('frontend.visitor.layouts.master')

@section('title','News')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">News</h1>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mt-5">
        <div class="row">
            
            @foreach ($news as $item)
                <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="work_img">
                                <img src="{{asset('uploads/news_tips/'.$item->image_video)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title}}</h5>
                                    <p class="card-text"><small class="text-muted"><i><b>Last Updated:</b> {{$item->created_at->format('F d, Y')}}</small></i></p>
                                    <a class="btn btn-primary" href="{{route('visitor.news_show',$item->id)}}">Read</a>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    
</section>


    
@endsection