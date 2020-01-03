@extends('frontend.user.layouts.master')

@section('title','Missing Complain')
    
@section('Main_Content')


<section class="forms">
    <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Missing Complain Form (Person)</h1>
            </div>
            
        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
        {{-- ---------------- X -------------------- --}}
        <div class="card">
            <div class="card-body">
                <form action="{{route('user.missingPerson.store')}}" method="post" enctype="multipart/form-data">
                   @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"> <b>Full Name</b> </label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                         
                            </div>
                            <div class="form-group">       
                                <label for="gender"><b>Gender</b></label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                                    <label class="form-check-label" for="gender">Female</label>
                                </div>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="age"><b>Age</b></label>
                                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Enter age" value="{{ old('age') }}">                
                                @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="physical_details"><b>Physical Details</b> [Optional]</label>
                                <textarea name="physical_details" id="physical_details" class="form-control" rows="3">{{ old('physical_details') }}</textarea>
                                @error('physical_details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                            
                            </div>
                            <div class="form-group">
                                <label for="image"><b>Insert Image</b></label>
                                <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}" >
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">       
                                <label for="description"><b>About Missing Person</b></label>
                                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="address"><b>Address</b> [Optional]</label>
                                <textarea name="address" id="address" class="form-control" rows="3">{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="phone"><b>Phone</b></label>
                                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="status"><b>Status</b></label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="found">
                                    <label class="form-check-label" for="status">Found</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="not_found">
                                    <label class="form-check-label" for="status">Not Found</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="dead">
                                    <label class="form-check-label" for="status">Dead</label>
                                </div>
                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="show"><b>Show</b></label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="show" id="show" value="public">
                                    <label class="form-check-label" for="show">Public</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="show" id="show" value="private">
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
    
@endsection