@extends('backend.layouts.mastertemplate')

@section('title', 'Add Crime Category')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Add Crime Category</h1>

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

        <form action="{{route('admin.crimeCategory.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="crimeCategoryName">Crime Category Name</label>
                <input type="text" name="crimeCategoryName" class="form-control @error('crimeCategoryName') is-invalid @enderror" id="crimeCategoryName" placeholder="Enter Crime Name" value="{{ old('crimeCategoryName') }}">
                @error('crimeCategoryName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

  
  @endsection