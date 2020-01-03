@extends('backend.layouts.mastertemplate')

@section('title', 'Crime Category')

@section('allPageContent')


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Crime Category</h1>
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
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                        <th>Serial</th>
                        <th>Crime Category Name</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @php $i=1; @endphp
                        @foreach ($crime_categories as $crimeCategory)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$crimeCategory->crimeCategoryName}}</td>                                
                                <td><a href="{{route('admin.crimeCategory.edit',$crimeCategory->id)}}" class="btn btn-primary m-0">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.crimeCategory.delete',$crimeCategory->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
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