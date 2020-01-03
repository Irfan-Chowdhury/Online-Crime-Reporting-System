@extends('backend.layouts.mastertemplate')

@section('title', 'Add Missing Category')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Add Other Missing Category</h1>

        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message') 
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('admin.otherMissingCategory.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="missingCategoryName"><b>Missing Category Name</b> [Except Person]</label>
                <input type="text" name="missingCategoryName" class="form-control @error('missingCategoryName') is-invalid @enderror" id="missingCategoryName" placeholder="Type Other Missing Category Name" value="{{ old('missingCategoryName') }}">
                @error('missingCategoryName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

  
  @endsection