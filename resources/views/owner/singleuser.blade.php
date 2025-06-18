@extends('layouts.app')
@section('title')User Page @endsection

@section('page-title')
{{$user[0]["name"]}}
@endsection

@section('content')
<div class="d-flex justify-content-end gap-4">
    <a href="/owner/manageusers/"><button class="btn btn-danger">Cancel</button></a>
</div>
            
<form class="row g-3 needs-validation border rounded p-2 bg-white"
    method="POST" action="/updateUser/{{$user[0]["id"]}}" novalidate>
        @csrf
        @method('POST')
        <h2><i class="fa-solid fa-gears"></i> User Settings</h2>
        <div class="row">
                <div class="col-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="d-none" type="number" value="{{$user[0]["id"]}}" name="id">
                    <input type="text" class="form-control" id="name" name="name" value="{{$user[0]["name"]}}" required>
                    <div class="invalid-feedback">
                        Required Field. You may only use the characters A to Z.
                    </div>
                </div>

                <div class="col-3">
                    <label for="user_type" class="form-label">User Type</label>
                    <select class="form-select" id="user_type" name="user_type"  required>
                        <option selected>{{$user[0]["user_type"]}}</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <div class="invalid-feedback">
                        Required Field.
                    </div>
                </div>
        </div>
        <div class="row">
        <div class="col-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user[0]["email"]}}">
            <div class="invalid-feedback">
                Required Field.
            </div>
        </div>
            <div class="col-3">
                           <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="{{$user[0]["status"]}}">
                    @if($user[0]["status"]===0)Disabled @endif
                    @if($user[0]["status"]===1)Active @endif
                </option>
                <option value="0">Disabled</option>
                <option value="1">Active</option>
            </select>
            </div>

        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Update User</button>
        
        </div>


    </form>

<script src="{{asset('storage/js/owner.js')}}"></script>
@endsection