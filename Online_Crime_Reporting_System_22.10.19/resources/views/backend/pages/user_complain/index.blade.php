@extends('backend.layouts.mastertemplate')

@section('title', 'Manage User Complain')

@section('allPageContent')

<section class="forms">
        <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">User Complain List</h1>
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
                        <th>Complain Type</th>
                        <th>Title</th>
                        <th>City</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($user_complains as $key => $userComplain)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$userComplain->user->id}}</td>
                                <td>{{$userComplain->crimeCategory->crimeCategoryName}}</td> 
                                <td>{{$userComplain->title}}</td> 
                                <td>{{$userComplain->city->cityName}}</td> 
                                <td>
                                    <form action="{{route('admin.userComplain.update',$userComplain->id)}}" method="post">
                                        @csrf

                                        @if ($userComplain->status=='PENDING')
                                            <input type="text" name="status" value="PROCESSING" hidden>
                                            <button type="submit" class="btn btn-danger m-0">New Complain</button>

                                        @elseif($userComplain->status=='PROCESSING')
                                            <input type="text" name="status" value="SOLVED" hidden>
                                            <button type="submit" class="btn btn-warning m-0">Done</button>
                                        
                                        @else
                                            <button type="submit" class="btn btn-success m-0" disabled>Solved</button>
                                        @endif
                                    </form>
                                </td>
                                    

                                <td><a href="{{route('admin.userComplain.show',$userComplain->id)}}" class="btn btn-info m-0">View</a></td>
                            </tr>
                        @endforeach  
                        
                  </tbody>
                </table>
              </div>
            </div>
        </div>
</section>    

@endsection