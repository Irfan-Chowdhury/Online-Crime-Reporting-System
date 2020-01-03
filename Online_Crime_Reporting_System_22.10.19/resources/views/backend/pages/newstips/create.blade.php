@extends('backend.layouts.mastertemplate')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">News/Tips</h1>
        </div>


        <div class="container mt-5">
            <h1 class="text-center">Add New News/Tips</h1>
    
            {{-- --------- Check in Seesion Message -------- --}}
                 @if (session()->has('message'))  
                    <div class="alert alert-{{session('type')}}">
                        {{ session('message')}}
                    </div>
                @endif 
            {{-- ---------------- X -------------------- --}}
    
            <form action="{{route('admin.newstips.store')}}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Post Title" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="description">Post Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="type" value="news">
                        <label class="form-check-label" for="type">News</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="type" value="tips">
                        <label class="form-check-label" for="type">Tips</label>
                    </div>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="image_video">Insert Image/video</label>
                    <input type="file"  name="image_video" class="form-control-file  @error('image_video') is-invalid @enderror" id="image_video" value="{{ old('image_video') }}" >
                    @error('image_video')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>


@endsection