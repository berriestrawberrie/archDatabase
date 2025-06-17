@extends('layouts.app')
@section('title') Glass Form @endsection


@section('page-title')

Glass Artifact Entry Form

@endsection



@section('content')
@include('forms.preview.popup')
<form class=" needs-validation" method="POST" action="{{url('submitGlass/'.$artifact[0]["token"])}}" novalidate enctype="multipart/form-data">
  @csrf
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <legend>Site & General Information</legend>
    @include('forms.glass.previewsite')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
        @include('forms.glass.previewfieldsI')
  </fieldset>

  <fieldset>
    <legend>Fields II Information</legend>
        @include('forms.glass.previewfieldsII')
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
<script src="{{asset('storage/js/verifynextform.js')}}"></script>
<script src="{{asset('storage/js/query_collection.js')}}"></script>

@endsection