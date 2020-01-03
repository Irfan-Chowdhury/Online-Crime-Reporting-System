@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Missing Othter')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Missing Others info</h1>
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
                        <th>Missing Type</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Owner Name</th>
                        <th>status</th>
                        <th>show</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($missing_others as $key => $missingOther)
                        @if ($missingOther->admin_id != NULL)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$missingOther->missing_category->missingCategoryName}}</td> {{-- missing_category() --}}
                                <td> <img src="{{asset('uploads/missing_others/'.$missingOther->image)}}" height="40" width="60"></td>                                
                                <td>{{$missingOther->missing_title}}</td> 
                                <td>{{$missingOther->owner_name}}</td> 
                                <td>{{$missingOther->status}}</td>                                
                                <td>{{$missingOther->show}}</td>                                
                                <td><a href="{{route('admin.missingOther.show',$missingOther->id)}}" class="btn btn-success m-0">Details</a></td>
                                <td><a href="{{route('admin.missingOther.edit',$missingOther->id)}}" class="btn btn-primary m-0">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.missingOther.delete',$missingOther->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
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