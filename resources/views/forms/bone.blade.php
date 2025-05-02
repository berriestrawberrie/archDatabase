@extends('layouts.app')

@section('title') Osteology Form @endsection


@section('page-title')

<h1 class="text-center">Osteology Artifact Entry Form</h1>

@endsection

@section('content')
<form class=" needs-validation" method="POST" action="{{route('submit.bone')}}" novalidate enctype="multipart/form-data">
  @csrf
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <div class="formkey bg-secondary-subtle">
      <b>Codes:</b>
      <ul>
          <li>f = 1 - 25% percent</li>
          <li>p = 25-75% percent</li>
          <li>c = 75-100% percent</li>
      </ul>
   </div>
    <legend>Site & General Information</legend>
    @include('forms.bones.site')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
    @include('forms.bones.fieldsI')
  </fieldset>

  <fieldset>
    <legend>Fields II Information</legend>
    @include('forms.bones.fieldsII')
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


@endsection