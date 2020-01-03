@extends('backend.layouts.mastertemplate')

@section('title', 'Add Missing Person')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Add Missing Person Info</h1>

        {{-- --------- Check in Session Message -------- --}}
           
            @include('backend.includes.session_message')

        {{-- ---------------- X -------------------- --}}

        <form action="{{route('admin.missingPerson.store')}}" method="post" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <label for="name"> <b>Full Name</b> </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
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


                    <div class="form-group col-md-6">
                        <label for="age"><b>Age</b></label>
                        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Enter age" value="{{ old('age') }}">                
                        @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="physical_details"><b>Physical Details</b> [Optional]</label>
                    <textarea name="physical_details" id="physical_details" class="form-control" rows="3">{{ old('physical_details') }}</textarea>
                    @error('physical_details')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="description"><b>About Missing Person</b></label>
                    <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="address"><b>Address</b> [Optional]</label>
                    <textarea name="address" id="address" class="form-control" rows="3">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="phone"><b>Phone</b></label>
                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
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

            <div class="form-group">
                <label for="image"><b>Insert Image</b></label>
                {{-- <input type="file" name="image[]" multiple class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}" > --}}
                <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}" >
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

  
  @endsection