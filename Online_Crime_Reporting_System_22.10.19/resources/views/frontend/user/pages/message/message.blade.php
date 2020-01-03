@extends('frontend.user.layouts.master')

@section('title','Message')
    
@section('Main_Content')


<section class="forms">
    <div class="container-fluid">
        <div class="card-header d-flex align-items-center">
            <h1 class="text-info">Message To Admin</h1>
        </div>
        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('user.message.store')}}" method="POST">
            @csrf 

            <div class="form-group row">
              <label for="subject" class="col-sm-2 col-form-label">Subject</label>
              <div class="col-sm-6">
                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" placeholder="Type The Subject" value="{{ old('subject')}}">
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            </div>
            <div class="form-group row">
              <label for="message" class="col-sm-2 col-form-label">Message</label>
              <div class="col-sm-6">
                <textarea name="message" class="form-control @error('message') is-invalid @enderror"  id="message" rows="5" cols="10">{{ old('message') }}</textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection