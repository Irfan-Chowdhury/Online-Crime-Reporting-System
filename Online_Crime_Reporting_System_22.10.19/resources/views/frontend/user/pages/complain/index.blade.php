@extends('frontend.user.layouts.master')

@section('title','User Complain List')
    
@section('Main_Content')


<section class="forms">
        <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Complain List</h1>
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
                        <th>Complain Type</th>
                        <th>Title</th>
                        <th>City</th>
                        <th>status</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($complains as $key => $complain)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$complain->crimeCategory->crimeCategoryName}}</td> 
                                <td>{{$complain->title}}</td> 
                                <td>{{$complain->city->cityName}}</td> 
                            
                            @if ($complain->status=="PENDING")
                                <td class="text-danger"><b>{{$complain->status}}</b></td>
                            @elseif($complain->status=="PROCESSING") 
                                <td class="text-warning"><b>{{$complain->status}}</b></td>
                            @else 
                                <td class="text-success"><b>{{$complain->status}}</b></td>
                            @endif
                                                               
                                <td><a href="{{route('user.complain.show',$complain->id)}}" class="btn btn-success m-0">View</a></td>
                                <td><a href="{{route('user.complain.edit',$complain->id)}}" class="btn btn-info m-0">Edit</a></td>
                                <td>
                                {{-- <div class="card-body"> --}}
                                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger">Delete</button>
                                        <!-- Modal-->
                                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 id="exampleModalLabel" class="modal-title">Delete Data</h5>
                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are You Sure To Delete ??</p>
                                                        <form action="{{route('user.complain.delete',$complain->id)}}" method="post">
                                                            @csrf
                                                            
                                                            @method('DELETE')
                                                            
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                    
                                    
                                    
                                    {{-- <form action="{{route('user.complain.delete',$complain->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
                                        @csrf
                                        @method('DELETE')
              
                                      <button type="submit" class="btn btn-danger m-0">Delete</button>
                                    </form> --}}
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