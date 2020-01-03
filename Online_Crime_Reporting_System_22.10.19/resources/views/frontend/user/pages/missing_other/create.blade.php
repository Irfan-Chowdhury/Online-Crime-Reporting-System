@extends('frontend.user.layouts.master')

@section('title','Missing Other')
    
@section('Main_Content')


<section class="forms">
    <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Missing Other Complain</h1>
            </div>
            
        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
        {{-- ---------------- X -------------------- --}}

        <div class="card">
            <div class="card-body">
                <form action="{{route('user.missingOther.store')}}" method="post" enctype="multipart/form-data">
                   @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label><b>Missing Category Name</b></label>
                                <select name="missing_category_id" id="missing_category_id" class="form-control col-md-6 @error('missing_category_id') is-invalid @enderror">
                                    <option selected>--Select--</option>
                                    @foreach ($missing_categories as $missingCategory)
                                        <option value="{{$missingCategory->id}}">{{$missingCategory->missingCategoryName}}</option>
                                    @endforeach
                                </select>
                                @error('missing_category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                       
                            </div>

                            <div class="form-group">       
                                <label for="missing_title"><b>Missing Title</b></label>
                                <input type="text" name="missing_title" class="form-control @error('missing_title') is-invalid @enderror" id="missing_title" placeholder="Enter missing title" value="{{ old('missing_title') }}">
                                @error('missing_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">       
                                <label for="owner_name"><b>Owner Name</b>[optional]</label>
                                <input type="text" name="owner_name" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name" placeholder="Enter missing title" value="{{ old('owner_name') }}">
                                @error('owner_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Description</b> [Optional]</label>
                                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                @error('description')
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
                                <label for="address"><b>Address</b></label>
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
                                    <input class="form-check-input" type="radio" name="show" id="show" value="private" >
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


@endsection