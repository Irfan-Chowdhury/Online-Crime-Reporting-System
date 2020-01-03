@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Missing Person')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Missing Person</h1>
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
                        <th>status</th>
                        <th>show</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @php $i=1; @endphp
                        @foreach ($missing_Persons as $missingPerson)
                          @if ($missingPerson->admin_id != NULL)  
                              <tr>
                                  <td>{{$i++}}</td>
                                  <td> <img src="{{asset('uploads/missing_person/admin/'.$missingPerson->image)}}" height="40" width="60"></td>                                
                                  <td>{{$missingPerson->name}}</td>                                
                                  <td>{{$missingPerson->status}}</td>                                
                                  <td>{{$missingPerson->show}}</td>                                
                                  <td><a href="{{route('admin.missingPerson.show',$missingPerson->id)}}" class="btn btn-success m-0">View</a></td>
                                  <td><a href="{{route('admin.missingPerson.edit',$missingPerson->id)}}" class="btn btn-primary m-0">Edit</a></td>
                                  <td>
                                      <form action="{{route('admin.missingPerson.delete',$missingPerson->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
                                          @csrf
                                          @method('DELETE')
                
                                        <button type="submit" class="btn btn-danger m-0">Delete</button>
                                      </form>
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