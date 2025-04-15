@extends('layouts.app')
@section('title') Buckle Form @endsection


@section('content') 

<h1>Buckle Form Here!</h1>

<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
    <i class="fa-solid fa-question"></i>
  </button>




  <script src="{{asset('storage/js/nextform.js')}}"></script>

@endsection