@extends('frontend.user.layouts.master')

@section('title','Profile')
    
@section('Main_Content')

<section class="forms">
    <div class="container-fluid">
        <div class="card-header d-flex align-items-center">
            <h1 class="text-info">Profile</h1>
        </div>
            
      {{-- --------- Check in Session Message -------- --}}
      @include('backend.includes.session_message')
      {{-- ---------------- X -------------------- --}}
      <div class="card">
          <div class="card-body">
              <form action="{{route('user.profile.update',$user->id)}}" method="post" enctype="multipart/form-data">
                 @csrf

                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"> <b>Full Name</b> </label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                         
                        </div>

                        <div class="form-group">
                            <label for="address"><b>address</b> [Optional]</label>
                            <textarea name="address" id="address" class="form-control" rows="3">{{ $user->address }}</textarea>
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                          
                        </div>
                        
                        <div class="form-group">
                            <label for="image"><b>Insert Image</b></label><br>
                            <img src="{{asset('uploads/users/'.$user->image)}}" alt="" srcset="" height="40px" width="60px">
                            <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">       
                            <label for="age"><b>Age</b></label>
                            <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="age" value="{{ $user->age }}">                
                            @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">       
                            <label for="age"><b>Phone </b></label>
                            <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ $user->phone }}">                
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> 

                  </div> 

                  <div class="form-group">       
                      <input type="submit" value="Update" class="btn btn-primary">
                  </div>
              </form>
          </div>
          </div>
      </div>

@endsection