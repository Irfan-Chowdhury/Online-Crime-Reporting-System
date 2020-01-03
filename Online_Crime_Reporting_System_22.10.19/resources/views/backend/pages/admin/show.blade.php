@extends('backend.layouts.mastertemplate')

@section('title', 'Admin Profile')

@section('allPageContent')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Admin Profile</h1>
</div>

    <div class="fluid-container mt-5">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>VoterId</th>
                <th>Image</th>
                <th>District</th>
                <th>Thana</th>
                <th>Phone</th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                      <th>{{$admin->id}}</th>
                      <td>{{$admin->fullname}}</td>
                      <td>{{$admin->username}}</td>
                      <td>{{$admin->email}}</td>
                      <td>{{$admin->voterId}}</td>
                      <td><img src="{{url('uploads/images',$admin->image)}}" alt="" width="80px" height="50px"></td>
                      <td>{{$admin->district}}</td>
                      <td>{{$admin->thana}}</td>
                      <td>{{$admin->phone}}</td>
                  </tr>
            </tbody>
          </table>
    </div>

@endsection