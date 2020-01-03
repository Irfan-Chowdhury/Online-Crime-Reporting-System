@extends('backend.layouts.mastertemplate')

@section('title', 'Admin Manage')

@section('allPageContent')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Admins Manage</h1>
</div>

<div class="container mt-5">
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Action</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
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
      <tbody>
          @foreach ($admins as $admin)
            <tr>
                <th>{{$admin->id}}</th>
                <td>{{$admin->fullname}}</td>
                <td>{{$admin->email}}</td>
                <td><a href="{{route('admin.show',$admin->id)}}" class="btn btn-success">View</a></td>
                <td><a href="{{route('admin.edit',$admin->id)}}" class="btn btn-primary">Edit</a></td>
                <form action="{{route('admin.delete',$admin->id)}}" method="post" onsubmit="return confirm('Are You Sure to delete ?')">
                    @csrf
                    @method('DELETE')

                  <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection

    
