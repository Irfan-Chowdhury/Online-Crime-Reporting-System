@extends('backend.layouts.mastertemplate')

@section('title', 'Edit Criminal Info')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Edit Criminal Information</h1>

        {{-- --------- Check in Seesion Message -------- --}}
            @if (session()->has('message'))  
                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                    <strong>{{ session('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif 
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('admin.criminalRecords.update',$criminal_records->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label><b>Crime Category</b></label>
                <select class="form-control" name="crimeCategory_id" id="crimeCategory_id">
                    <option value="">--Select--</option>
                    {{-- @if ($crime_categories->count()) --}}
                        @foreach ($crime_categories as $crimeCategory)
                            <option value="{{$crimeCategory->id}}" {{ $crimeCategory->id == $criminal_records->crimeCategory_id ? 'selected="selected"' : '' }}>{{$crimeCategory->crimeCategoryName}}</option>
                        @endforeach
                    {{-- @endif --}}
                </select>
                @error('crimeCategory_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="name"> <b>Full Name</b> </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $criminal_records->name }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description"><b>Criminal Description</b></label>
                <textarea name="description" id="description" class="form-control" rows="3">{{$criminal_records->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address"><b>Address</b></label>
                <textarea name="address" id="address" class="form-control" rows="3">{{ $criminal_records->address }}</textarea>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="thana"><b>Status</b></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="found" {{ ($criminal_records->status=="found")? "checked" : ""}} >
                    <label class="form-check-label" for="status">Found</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="not_found" {{ ($criminal_records->status=="not_found")? "checked" : ""}}>
                    <label class="form-check-label" for="status">Not Found</label>
                </div>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for=""><b>Show</b></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="show" id="show" value="public" {{ ($criminal_records->show=="public")? "checked" : ""}}>
                    <label class="form-check-label" for="show">Public</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="show" id="show" value="private" {{ ($criminal_records->show=="private")? "checked" : ""}}>
                    <label class="form-check-label" for="show">Private</label>
                </div>
                @error('show')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image"><b>Insert Image</b></label><br>
                <img src="{{url('uploads/criminals_images',$criminal_records->image)}}" alt="" width="100px" height="100px">
                <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ $criminal_records->image }}" >
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

  
  @endsection