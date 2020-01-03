@extends('backend.layouts.mastertemplate')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage News/Tips</h1>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            {{-- --------- Check in Seesion Message -------- --}}
              @if (session()->has('message')) 
                  <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                      {{ session('message')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div> 
            @endif 
          {{-- ---------------- X -------------------- --}}
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Types</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Types</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                        @foreach ($news_tips as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->type}}</td>
                                
                                <td><a href="{{route('admin.newstips.show',$item->id)}}" class="btn btn-success">View</a></td>
                                <td><a href="{{route('admin.newstips.edit',$item->id)}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.newstips.delete',$item->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
                                        @csrf
                                        @method('DELETE')
              
                                      <button type="submit" class="btn btn-danger">Delete</button>
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