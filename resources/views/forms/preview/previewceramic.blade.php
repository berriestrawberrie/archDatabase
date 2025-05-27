@extends('layouts.app')

@section('title') Preview Ceramic @endsection


@section('page-title')

<h1 class="text-center bg-success">Review Ceramic</h1>

@endsection

@section('content')
<div id="buffer" class="position-absolute start-0 w-100 h-100 d-flex justify-content-center align-items-start" style="top:-10px; background: #00000020;">
  <div class="bg-light border w-50  rounded-3 d-flex justify-content-start align-items-center flex-column mt-4"   style="height: 150px;">
    <h2 class="w-100 bg-dark rounded-top text-white p-2 pb-0 text-center">Review You Entries</h2>
    <p class="mt-2">Confirm your entries and submit for artifact validation. </p>
    <button onclick=continueForm() class="btn btn-primary">Continue</button>
  </div>

</div>
<form class=" needs-validation" method="POST" action="{{url('submitData/'.$artifact[0]["artifact_id"])}}" novalidate enctype="multipart/form-data">
  @csrf
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <legend>Site & General Information</legend>
    @include('forms.ceramics.previewsite')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
    @include('forms.ceramics.previewfieldsI')
  </fieldset>

  <fieldset>
    <legend>Fields II Information</legend>
    @include('forms.ceramics.previewfieldsII')
  </fieldset>

  <fieldset class="mt-2">
    <input type="submit" class="btn btn-success" value="Submit">
  </fieldset>


</form>


<script>
    //INITIALIZE THE POPP OVERS
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
  const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl)) 
</script>
<script src="{{asset('storage/js/verifynextform.js')}}"></script>


@endsection