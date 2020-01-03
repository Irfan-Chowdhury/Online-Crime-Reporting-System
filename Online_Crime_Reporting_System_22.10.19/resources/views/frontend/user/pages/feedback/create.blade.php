@extends('frontend.user.layouts.master')

@section('title','Feedback')
    
@section('Main_Content')


<section class="forms">
    <div class="container-fluid">
        <div class="card-header d-flex align-items-center">
            <h1 class="text-info">Feedback</h1>
        </div>
        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('user.feedback.store')}}" method="POST">
            @csrf 

            <div class="form-group row mt-5">
                <label class="col-sm-2 col-form-label">Select Topic</label>
                <div class="col-sm-6">
                    <select name="complain_id" class="form-control @error('complain_id') is-invalid @enderror">
                            <option selected>--- Select ---</option>
                        @foreach ($complains as $complain)
                            <option value="{{$complain->id}}">{{$complain->title}}</option>
                        @endforeach
                    </select>  
                    @error('complain_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>                        
            </div>

            <div class="form-group row">
                <label for="feedback" class="col-sm-2 col-form-label">Give Feedback</label>
                <div class="col-sm-6">
                    <textarea name="feedback" class="form-control @error('feedback') is-invalid @enderror"  id="feedback" rows="5" cols="10">{{ old('feedback') }}</textarea>
                    @error('feedback')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</section>

@endsection