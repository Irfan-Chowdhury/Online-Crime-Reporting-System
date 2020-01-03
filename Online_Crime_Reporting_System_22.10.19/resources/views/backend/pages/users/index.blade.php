@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Users Info')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Users info</h1>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>User Id</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($users as $key => $usersInfo)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td> <img src="{{asset('uploads/users/'.$usersInfo->image)}}" height="40" width="60"></td>                                
                                <td>{{$usersInfo->name}}</td> 
                                <td>{{$usersInfo->id}}</td> 
                                <td><a href="{{route('admin.usersInfo.show',$usersInfo->id)}}" class="btn btn-success m-0">View</a></td>
                                <td>
                                    <form action="{{route('admin.usersInfo.delete',$usersInfo->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
                                        @csrf
                                        @method('DELETE')
              
                                      <button type="submit" class="btn btn-danger m-0">Delete</button>
                                    </form>
                              </td>
                            </tr>
                        @endforeach 
                        
                  </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection