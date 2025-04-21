@extends('layouts.app')
@section('title')Home @endsection

@section('page-title')
<h1 class="text-center">Welcome</h1>
@endsection

@section('content')
<div class="dash">
<div class="dash__top">
    <img src="{{asset('storage/images/picture.png')}}">
    <div class="dash__topdesc">
        <h2>Picture Description Intro?</h2>
        <p>Page desc..</p>
    </div>
</div>
</div>

<div class="collections">
    <div class="card card-style1" style="width: 18rem;">
        <img src="{{asset('storage/images/picture.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mx-auto">Collection (1)</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>
</div>

@endsection