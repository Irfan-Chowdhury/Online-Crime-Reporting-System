@extends('backend.layouts.mastertemplate')

@section('title', 'Add New Admin')

@section('allPageContent')

    <div class="container mt-5">
        <h1 class="text-center">Add New Admin</h1>

        {{-- --------- Check in Seesion Message -------- --}}
             @if (session()->has('message'))  
                <div class="alert alert-{{session('type')}}">
                    {{ session('message')}}
                </div>
            @endif 
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" placeholder="Enter Full Name" value="{{ old('fullname') }}">
                @error('fullname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" placeholder="Enter User Name">
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="name@example.com">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="voterId">Voter Id</label>
                <input type="text" name="voterId" class="form-control @error('voterId') is-invalid @enderror" id="voterId" value="{{ old('voterId') }}" placeholder="Enter Valid Voter Id">
                @error('voterId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>District</label>
                <select class="form-control" name="district" required>
                    <option selected>--Select--</option>
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
                <input type="text" name="thana" class="form-control @error('thana') is-invalid @enderror" id="thana" value="{{ old('thana') }}" placeholder="Enter Thana">
                @error('thana')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}" placeholder="Enter Phone">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" placeholder="Enter password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Insert Image</label>
                <input type="file"  name="image" class="form-control-file  @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}" >
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

  
  @endsection