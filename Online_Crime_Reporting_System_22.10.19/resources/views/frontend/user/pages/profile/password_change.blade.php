@extends('frontend.user.layouts.master')

@section('title','Password Change')
    
@section('Main_Content')

<section class="forms">
        <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Password Change</h1>
            </div>
                
          {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
          {{-- ---------------- X -------------------- --}}
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form action="{{route('user.password_update')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="old_pass">Old Password</label>
                        {{-- <input name="old_pass" type="password" class="form-control" id="old_pass" aria-describedby="emailHelp" placeholder="Enter Previous Password"> --}}
                        <input type="password" name="old_pass" id="old_pass" class="form-control @error('old_pass') is-invalid @enderror" placeholder="Enter Old password">
                        @error('old_pass')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="new_pass">New Password</label>
                        {{-- <input name="new_pass" type="password" class="form-control" id="new_pass" placeholder="New Password"> --}}
                        <input type="password" name="new_pass" id="new_pass" class="form-control @error('new_pass') is-invalid @enderror" placeholder="Enter New password"  autocomplete="new-password">
                        @error('new_pass')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Your password-confirm"  autocomplete="new-password"  >
                    </div> --}}
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
         
        </div>
</section>

@endsection