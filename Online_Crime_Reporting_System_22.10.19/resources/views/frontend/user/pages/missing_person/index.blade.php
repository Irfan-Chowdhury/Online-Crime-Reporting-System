@extends('frontend.user.layouts.master')

@section('title','Manage Missing Person List')
    
@section('Main_Content')


<section class="forms">
        <div class="container-fluid">
            <div class="card-header d-flex align-items-center">
                <h1 class="text-info">Manage Missing Person</h1>
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
                        <th>status</th>
                        <th>show</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                         @php $i=1 @endphp
                         @foreach ($missing_Persons as $missingPerson)
                            @if ($missingPerson->user_id != NULL)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td> <img src="{{asset('uploads/missing_person/user/'.$missingPerson->image)}}" height="40" width="60"></td>                                
                                    <td>{{$missingPerson->name}}</td>                                
                                    <td>{{$missingPerson->status}}</td>                                
                                    <td>{{$missingPerson->show}}</td>                                 
                                    <td><a href="{{route('user.missingPerson.show',$missingPerson->id)}}" class="btn btn-success m-0">View</a></td>
                                    <td><a href="{{route('user.missingPerson.edit',$missingPerson->id)}}" class="btn btn-info m-0">Edit</a></td>
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
                                                            <form action="{{route('user.missingPerson.delete',$missingPerson->id)}}" method="post">
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
                                    </td>
                                </tr>
                            @endif
                        @endforeach  
                        
                  </tbody>
                </table>
              </div>
            </div>
        </div>
</section>    

@endsection