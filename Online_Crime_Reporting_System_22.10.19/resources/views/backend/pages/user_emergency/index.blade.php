@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Users Feedback')

@section('allPageContent')

<section class="forms">
        <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Users Emergency Help</h1>
            </div>
            {{-- --------- Check in Session Message -------- --}}
                @include('backend.includes.session_message')
            {{-- ---------------- X -------------------- --}}

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                        <th>SL</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Emergency Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($emergencies as $key => $emergency)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$emergency->user_id}}</td>
                                <td>{{$emergency->user->name}}</td> 
                                <td>{{$emergency->user->phone}}</td> 
                                <td>{{$emergency->emergencyType->typeName}}</td> 
                            @if ($emergency->status=="Emergency")
                                <td class="text-danger"><b>{{$emergency->status}}</b></td> 
                            @else
                                <td class="text-success"><b>{{$emergency->status}}</b></td> 
                            @endif
                                
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#target{{$key+1}}">
                                            View
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="target{{$key+1}}" tabindex="-1" role="dialog" aria-labelledby="target{{$key+1}}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="target{{$key+1}}">{{$emergency->emergencyType->typeName}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{$emergency->details}}
                                                    
                                                    <br><br>
                                                    <a href="https://www.google.com/maps/place/{{$emergency->late_long}}" class="ml-0 btn btn-success" target="_blank">Check Location</a>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('admin.emergency.update',$emergency->id)}}" method="POST">
                                                        @csrf
                                                            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                                            <button type="submit" class="btn btn-primary">OK</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </td>
                            </tr>
                        @endforeach  
                        
                  </tbody>
                </table>
              </div>
            </div>
        </div>
</section>    

@endsection