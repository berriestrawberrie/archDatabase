@extends('layouts.app')
@section('title')Manage Users @endsection

@section('page-title')

@endsection

@section('content')

@include('owner.components.registerform')

<div class="bg-danger w-auto d-flex justify-content-between align-items-center px-2 py-4">
    <h1 class="text-white">User Management</h1>
    <div>
        <button class="btn btn-dark" id="addUserBtn">Add User</button>
    </div>
</div>
<table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th class="text-start" scope="col">Name</th>
      <th scope="col">User</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr class="@if($user->status === 0)table-secondary hidden d-none @endif">
        <th scope="row">{{$user->id}}</th>
        <td class="text-start">{{$user->name}}</td>
        <td>{{$user->user_type}}</td>
        <td>{{$user->password_encrypt}}</td>
        <td>{{$user->email}}</td>
        <!--USER STATUS-->
        <td style="width:100px;">
            @if($user->status === 1)<i class="fa-solid fa-circle text-success" style="font-size:10px;"></i> Active @endif
            @if($user->status === 0)<i class="fa-solid fa-circle text-danger" style="font-size:10px;"></i> Disabled @endif
        </td>
        <!--USER SETTINGS-->
        <td class="d-flex justify-content-evenly">
        @if($user->status === 1)
        <a href="/userSettings/{{$user->id}}"><i class="fa-solid fa-gear text-primary fs-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
        @endif
        </a> 
        
        <!--USER DELETE-->
        @if($user->status === 1)
        <a href="quickaction/{{$user->id}}/delete"><i class="ps-2 fs-2 fa-solid fa-circle-xmark text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"></i></a>
        @else
        <a href="quickaction/{{$user->id}}/restore"><i class="ps-2 fs-2 fa-solid fa-arrows-rotate text-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Restore"></i></a></td>
        @endif
        </tr>
    @endforeach

  </tbody>
</table>
<div class="d-flex justify-content-end">
    <i class="fa-solid fa-trash-can fs-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Show Disabled Users" onclick="showDisabledUsers()"></i>
</div>

<script src="{{asset('storage/js/owner.js')}}"></script>
@endsection