@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Message List')

@section('allPageContent')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Inbox List</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>SL</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>status</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($messages as $key=>$msg)
                            @if ($msg->roll == 'user')
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$msg->user_id}}</td>
                                    <td>{{$msg->userName->name}}</td>
                                    <td>{{$msg->subject}}</td>
                                    @if ($msg->status=='SEEN')
                                        <td class="text-success"><b>{{$msg->status}}</b></td>
                                    @else
                                        <td class="text-danger"><b>{{$msg->status}}</b></td>
                                    @endif
                                    
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$msg->subject}}">
                                                View
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="{{$msg->subject}}" tabindex="-1" role="dialog" aria-labelledby="{{$msg->subject}}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="{{$msg->subject}}">{{$msg->subject}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$msg->message}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{route('user.message.update',$msg->id)}}" method="POST">
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
                            @endif
                            
                        @endforeach

                </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection