@extends('backend.layouts.mastertemplate')

@section('title', 'Add Missing Others')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Add Missing Other Info</h1>

        {{-- --------- Check in Session Message -------- --}}
           
            @include('backend.includes.session_message')

        {{-- ---------------- X -------------------- --}}

        <form action="{{route('admin.missingOther.update',$missing_other->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label><b>Missing Category Name</b></label>
                <select name="missing_category_id" id="missing_category_id" class="form-control col-md-6 @error('missing_category_id') is-invalid @enderror">
                    <option selected>--Select--</option>
                    @foreach ($missing_categories as $missingCategory)

                        <option value="{{$missingCategory->id}}" {{ $missingCategory->id == $missing_other->missing_category_id ? 'selected': '' }}>{{$missingCategory->missingCategoryName}}</option> {{--By Me--}}
                    
                    @endforeach
                </select>
                @error('missing_category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="missing_title"><b>Missing Title</b></label>
                    <input type="text" name="missing_title" class="form-control @error('missing_title') is-invalid @enderror" id="missing_title"  value="{{ $missing_other->missing_title }}">
                    @error('missing_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="owner_name"><b>Owner Name [optional]</b></label>
                    <input type="text" name="owner_name" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name" value="{{ $missing_other->owner_name }}">
                    @error('owner_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="description"><b>Description</b> [Optional]</label>
                    <textarea name="description" id="description" class="form-control" rows="3">{{$missing_other->description}}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 

                 <div class="form-group col-md-6">
                    <label for="address"><b>Address</b></label>
                    <textarea name="address" id="address" class="form-control" rows="3">{{$missing_other->address}}</textarea>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> 


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone"><b>Phone</b></label>
                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"  value="{{ $missing_other->phone }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="status"><b>Status</b></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="found" {{ ($missing_other->status=="found")? "checked" : ""}}>
                    <label class="form-check-label" for="status">Found</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="not_found" {{ ($missing_other->status=="not_found")? "checked" : ""}}>
                    <label class="form-check-label" for="status">Not Found</label>
                </div>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="show"><b>Show</b></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="show" id="show" value="public" {{ ($missing_other->show=="public")? "checked" : ""}}>
                    <label class="form-check-label" for="show">Public</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="show" id="show" value="private" {{ ($missing_other->show=="private")? "checked" : ""}}>
                    <label class="form-check-label" for="show">Private</label>
                </div>
                @error('show')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image"><b>Insert Image</b></label> <br>
                <img src="{{asset('uploads/missing_others/'.$missing_other->image)}}" height="100" width="100"> <br>                              
                <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}" >
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

  
  @endsection