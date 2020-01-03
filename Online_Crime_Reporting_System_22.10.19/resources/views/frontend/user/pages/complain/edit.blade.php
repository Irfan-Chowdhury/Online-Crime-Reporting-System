@extends('frontend.user.layouts.master')

@section('title','Edit Complain')
    
@section('Main_Content')


<section class="forms">
    <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Edit Complain</h1>
            </div>
            
        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
        {{-- ---------------- X -------------------- --}}
        <div class="card">
            <div class="card-body">
                <form action="{{route('user.complain.update',$complain->id)}}" method="post" enctype="multipart/form-data">
                   @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label><b>Complain Type</b></label>
                                <select name="crimeCategory_id" class="form-control @error('crimeCategory_id') is-invalid @enderror">
                                        <option selected>--- Select ---</option>
                                    @foreach ($crimeCategories as $CrimeCategory)
                                        @if ($CrimeCategory->id==1 || $CrimeCategory->id==7)
                                            @continue
                                        @else
                                             <option value="{{$CrimeCategory->id}}" {{ $CrimeCategory->id == $complain->crimeCategory_id ? 'selected': '' }}>{{$CrimeCategory->crimeCategoryName}}</option>
                                        @endif
                                    @endforeach
                                </select>  
                                @error('crimeCategory_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                          
                            </div>
                            <div class="form-group">       
                                <label><b>Complain Title</b></label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $complain->title }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label><b>Description</b></label>
                                <textarea name="description" id="description" rows="3" class="form-control">{{ $complain->description }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image"><b>Insert Image/Video</b></label><br>
                                @foreach ($complain->imageComplain as $item)
                                    <img src="{{asset('uploads/complains/'.$item->image)}}" alt="" srcset="" height="40px" width="60px">
                                @endforeach
                                <input type="file" name="image[]" multiple class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ $complain->image }}" >
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label><b>City</b></label>
                                <select name="city_id" class="form-control">
                                        <option selected>--- Select ---</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city->id}}" {{$city->id==$complain->city_id ? 'selected': ''}}>{{$city->cityName}}</option>
                                    @endforeach
                                </select>                            
                            </div>
                            <div class="form-group">       
                                <label><b>Late Long</b> [Optional]</label>
                                <input type="text" name="late_long" placeholder="Enter Late Long" class="form-control @error('late_long') is-invalid @enderror" id="late_long" value="{{ $complain->late_long }}">
                                @error('late_long')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label><b>Address</b></label>
                                <textarea name="address" id="address" rows="3" class="form-control">{{ $complain->address }}</textarea>
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="show"><b>Show</b></label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="show" id="show" value="public" {{ ($complain->show=="public")? "checked" : ""}}>
                                    <label class="form-check-label" for="show">Public</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="show" id="show" value="private" {{ ($complain->show=="private")? "checked" : ""}}>
                                    <label class="form-check-label" for="show">Private</label>
                                </div>
                                @error('show')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">       
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            </div>
        </div>
</section>



{{-- <div class="container mt-5">
    <h1 class="text-center text-info display-3 ">Add Your Complain</h1>
</div> --}}
{{-- https://www.google.com/maps/place/22°29'47.5"N 91°43'15.6"E --}}
@endsection