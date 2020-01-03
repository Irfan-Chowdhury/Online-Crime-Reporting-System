@extends('backend.layouts.mastertemplate')

@section('allPageContent')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">News/Tips</h1>
        </div>


        <div class="container mt-5">
            <h1 class="text-center">Edit the News/Tips</h1>
    
            {{-- --------- Check in Seesion Message -------- --}}
                 @if (session()->has('message'))  
                    <div class="alert alert-{{session('type')}}">
                        {{ session('message')}}
                    </div>
                @endif 
            {{-- ---------------- X -------------------- --}}
    
            <form action="{{route('admin.newstips.update',$newstips->id)}}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"  value="{{$newstips->title}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="description">Post Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3">{{$newstips->description}}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="type" value="news" {{ ($newstips->type=="news")? "checked" : "" }}>
                        <label class="form-check-label" for="type">News</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="type" value="tips" {{ ($newstips->type=="tips")? "checked" : "" }}>
                        <label class="form-check-label" for="type">Tips</label>
                    </div>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="image_video">Insert Image/video</label><br>
                    <img src="{{url('uploads/news_tips',$newstips->image_video)}}" alt="" width="100px" height="100px">
                    <input type="file"  name="image_video" class="form-control-file  @error('image_video') is-invalid @enderror" id="image_video">
                    @error('image_video')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>




@endsection