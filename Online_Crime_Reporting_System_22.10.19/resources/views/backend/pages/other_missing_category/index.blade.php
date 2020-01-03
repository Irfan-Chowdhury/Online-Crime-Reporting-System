@extends('backend.layouts.mastertemplate')

@section('title', 'Manage Others Missing Category')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Others Missing Category</h1>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            {{-- --------- Check in Seesion Message -------- --}}
                @include('backend.includes.session_message') 
            {{-- ---------------- X -------------------- --}}
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                        <th>Serial</th>
                        <th>Other Missing Category Name</th>
                        <th colspan="1" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($missingCategories as $key => $missingCategory)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$missingCategory->missingCategoryName}}</td>                                
                                <td>
                                    <form action="{{route('admin.otherMissingCategory.delete',$missingCategory->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
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