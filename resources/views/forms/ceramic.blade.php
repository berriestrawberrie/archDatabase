@extends('layouts.app')

@section('title') Ceramic Form @endsection


@section('page-title')

<h1 class="text-center">Ceramic Artifact Entry Form</h1>

@endsection

@section('content')
 <div class="">

 </div>
<form class=" needs-validation" method="POST" action="{{route('save.ceramic')}}" novalidate enctype="multipart/form-data">
  @csrf
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <legend>Site & General Information</legend>
    @include('forms.ceramics.site')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
    @include('forms.ceramics.fieldsI')
  </fieldset>

  <fieldset>
    <legend>Fields II Information</legend>
    @include('forms.ceramics.fieldsII')
  </fieldset>

  <fieldset class="mt-2">
    <button class="btn btn-primary">   Save</button>
  </fieldset>


</form>


<script>
    //INITIALIZE THE POPP OVERS
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
  const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl)) 
</script>
<script src="{{asset('storage/js/nextform.js')}}"></script>


@endsection