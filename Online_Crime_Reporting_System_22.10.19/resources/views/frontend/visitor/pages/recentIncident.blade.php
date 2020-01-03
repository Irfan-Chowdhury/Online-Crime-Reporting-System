@extends('frontend.visitor.layouts.master')

@section('title','Recent Incident')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">Recent Complain/Crime</h1>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mt-5">

        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <div class="btn-group ml-5">
                    <button class="btn btn-info btn-lg" type="button">
                        Search By City
                    </button>
                    <button type="button" class="btn btn-lg btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu bg-info">
                        @foreach ($cities as $city)
                            <a class="dropdown-item" href="{{route('visitor.recentIncident_city',$city->id)}}">{{$city->cityName}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            @foreach ($complains as $item)
                <div class="col-md-4">
                    <div class="card mb-3">
                        @php $i=1; @endphp
                        @foreach ($item->imageComplain as $itemImage)
                            @if ($i>0) 
                            <div class="work_img" >
                                <img src="{{asset('uploads/complains/'.$itemImage->image)}}" class="card-img-top"   alt="...">
                            </div>
                            @endif
                            @php $i--; @endphp
                        @endforeach
                        <div class="card-body">
                            {{-- @php $textValue= str_limit($item->descriptioin,100); @endphp --}}

                            <h5 class="card-title">{{$item->title}}</h5>
                            {{-- <p class="card-text">{{Str::words($textValue, $limit = 100, $end = '...')}}</p> --}}
                            {{-- <p class="card-text">{{ str_limit($item->descriptioin, $limit = 100, $end = '...') }}</p> --}}
                            {{-- <p class="card-text">{{ Str::limit($item->descriptioin, 80) }}</p> --}}
                            <p class="card-text"><small class="text-muted"><i><b>Last Updated:</b> {{$item->created_at->format('F d, Y')}} , {{$item->city->cityName}}</small></i></p>
                            <a class="btn btn-primary" href="{{route('visitor.recentIncident_show',$item->id)}}">Read</a>
                        </div>
                    </div>
                </div>
            @endforeach   
        </div>
    </div>
    
</section>

{{-- <div class="col-md-3">
        <h3>Find By City</h3>
    </div> --}}

{{-- <section id="work_area">
        <div class="works">
           <div class="row">
           
            @foreach ($complains as $item)
                <div class="single_work col-sm-4" style="padding-left:100px">
                    @php $i=1 @endphp
                    @foreach ($item->imageComplain as $itemImage)
                        @if ($i>0) 
                            <div class="work_img">
                                <img src="{{asset('uploads/complains/'.$itemImage->image)}}" >
                            </div>
                        @endif
                        @php $i-- @endphp
                    @endforeach
                    <div class="work_content">
                      <h4>{{$item->title}}</h4>
                      <p><b>Last Updated: </b> <i>{{$item->created_at->format('F d, Y')}}</i></p>
                      <a href="{{route('visitor.recentIncident_show',$item->id)}}">Read</a>
                    </div>
                </div> 
            @endforeach
            
       
          </div>
        </div>
       </section> --}}
    <!-- ----------------My Recent Work Area End --------------  -->


    
@endsection