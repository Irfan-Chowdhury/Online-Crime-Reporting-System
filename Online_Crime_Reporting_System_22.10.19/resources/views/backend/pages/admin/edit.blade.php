@extends('backend.layouts.mastertemplate')

@section('title', 'Edit Admin')

@section('allPageContent')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Admins Updte</h1>
</div>


    <div class="container mt-5">
        {{-- --------- Check in Seesion Message -------- --}}
             @if (session()->has('message'))  
                <div class="alert alert-{{session('type')}}">
                    {{ session('message')}}
                </div>
            @endif 
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('admin.update',$admin->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname"  value="{{$admin->fullname}}">
                @error('fullname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $admin->username }}" >
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $admin->email }}" >
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="voterId">Voter Id</label>
                <input type="text" name="voterId" class="form-control @error('voterId') is-invalid @enderror" id="voterId" value="{{ $admin->voterId }}">
                @error('voterId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Here Need to customize --}}
            <div class="form-group"> 
                <label>District</label>
                <select class="form-control" name="district" required>
                    <option value="{{ $admin->district }}">{{ $admin->district }}</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                </select>
                @error('district')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="thana">Thana</label>
                <input type="text" name="thana" class="form-control @error('thana') is-invalid @enderror" id="thana" value="{{$admin->thana }}" >
                @error('thana')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ $admin->phone }}" >
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Insert Image</label> <br>
                <img src="{{url('uploads/images',$admin->image)}}" alt="" width="100px" height="100px">
                <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{$admin->image}}" >
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
  </div>

@endsection