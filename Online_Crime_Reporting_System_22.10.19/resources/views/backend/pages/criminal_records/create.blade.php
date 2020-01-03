@extends('backend.layouts.mastertemplate')

@section('title', 'Add Criminal')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Add Criminal Information</h1>

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

        <form action="{{route('admin.criminalRecords.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label><b>Criminal Type</b></label>
                <select name="crimeCategory_id" id="crimeCategory_id" class="form-control @error('crimeCategory_id') is-invalid @enderror">
                    <option selected>--Select--</option>
                    @foreach ($crime_categories as $crimeCategory)
                        <option value="{{$crimeCategory->id}}">{{$crimeCategory->crimeCategoryName}}</option>
                    @endforeach
                </select>
                @error('crimeCategory_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="name"> <b>Full Name</b> </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description"><b>Criminal Description</b></label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address"><b>Address</b></label>
                <textarea name="address" id="address" class="form-control" rows="3">{{ old('address') }}</textarea>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="thana"><b>Status</b></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="found">
                    <label class="form-check-label" for="status">Found</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="not_found">
                    <label class="form-check-label" for="status">Not Found</label>
                </div>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for=""><b>Show</b></label> <br>
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