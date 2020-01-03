@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Users Feedback')

@section('allPageContent')

<section class="forms">
        <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Users Feedback</h1>
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
                        <th>User Name</th>
                        <th>About Topic</th>
                        <th>Topic Id</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($users_feedback as $key => $feedback)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$feedback->user_id}}</td>
                                <td>{{$feedback->user->name}}</td> 
                                <td>{{$feedback->complain->title}}</td> 
                                <td>{{$feedback->complain->id}}</td> 
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
                                                <h5 class="modal-title" id="target{{$key+1}}">{{$feedback->complain->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{$feedback->feedback}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    

                                {{-- <td><a href="{{route('admin.userComplain.show',$userComplain->id)}}" class="btn btn-info m-0">View</a></td> --}}
                            </tr>
                        @endforeach  
                        
                  </tbody>
                </table>
              </div>
            </div>
        </div>
</section>    

@endsection