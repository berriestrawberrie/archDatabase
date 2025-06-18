@extends('layouts.app')
@section('title') Utensil Form @endsection


@section('page-title')

Utensil Artifact Entry Form

@endsection



@section('content')
<form class=" needs-validation" method="POST" action="{{route('save.utensil')}}" novalidate enctype="multipart/form-data">
  @csrf
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <legend>Site & General Information</legend>
    @include('forms.utensil.site')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
        @include('forms.utensil.fieldsI')
  </fieldset>
  
  <fieldset>
    <legend>Fields II Information</legend>
        @include('forms.utensil.fieldsII')
  </fieldset>



  <fieldset class="mt-2">
    <input type="submit" class="btn btn-primary">
  </fieldset>


</form>


<script>
    //INITIALIZE THE POPP OVERS
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
  const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl)) 
</script>
<script src="{{asset('storage/js/nextform.js')}}"></script>
<script src="{{asset('storage/js/query_collection.js')}}"></script>


@endsection