@extends('layouts.app')
@section('title')Admin @endsection

@section('content')
<h1 class="text-center"><i class="fa-solid fa-user-tie"></i> </h1>
<h3 class="text-center">Welcome to the Admin Dashboard</h3>
<p>This dashboard provides a centralized view of your system’s key metrics, user activity, 
    and management tools. From here, you can monitor performance, manage content and users,
     review reports, and make data-driven decisions to keep everything running smoothly. 
     Use the sidebar to navigate through different sections and stay in control of your platform.
</p>

<img src="{{asset('storage/images/picture.png')}}" width="200">

@endsection