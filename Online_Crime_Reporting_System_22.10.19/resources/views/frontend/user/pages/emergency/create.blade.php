@extends('frontend.user.layouts.master')

@section('title','Emergency Help')
    
@section('Main_Content')


<section class="forms">
    <div class="container-fluid">
        <div class="card-header d-flex align-items-center">
            <h1 class="text-info">Emergency Help</h1>
        </div>
        {{-- --------- Check in Session Message -------- --}}
            @include('backend.includes.session_message')
        {{-- ---------------- X -------------------- --}}

        <form action="{{route('user.emergency.store')}}" method="POST">
            @csrf 

            <div class="form-group row mt-5">
                <label class="col-sm-2 col-form-label">Emergency Type</label>
                <div class="col-sm-6">
                    <select name="emergency_type_id" class="form-control @error('emergency_type_id') is-invalid @enderror">
                            <option selected>--- Select ---</option>
                        @foreach ($emergency_types as $type)
                            <option value="{{$type->id}}">{{$type->typeName}}</option>
                        @endforeach
                    </select>  
                    @error('emergency_type_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>                        
            </div>

            <div class="form-group row">
                <label for="details" class="col-sm-2 col-form-label">Details with Address</label>
                <div class="col-sm-6">
                    <textarea name="details" class="form-control @error('details') is-invalid @enderror"  id="details" rows="5" cols="10">{{ old('details') }}</textarea>
                    @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="late_long" class="col-sm-2 col-form-label">Late Long</label>
                <div class="col-sm-6">
                    <div class="form-group">       
                        <input type="text" name="late_long" placeholder="Enter Late Long" class="form-control @error('late_long') is-invalid @enderror" id="late_long" value="{{ old('late_long') }}">
                        @error('late_long')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <textarea name="late_long" class="form-control @error('late_long') is-invalid @enderror"  id="late_long" rows="3" cols="10">{{ old('late_long') }}</textarea>
                    @error('late_long')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
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