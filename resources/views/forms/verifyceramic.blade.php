@extends('layouts.app')

@section('title') Ceramic Form @endsection

@section('content')


<h1>Verify Ceramic#{{$artifact[0]["id"]}}</h1>
<p>The form is pre-populated with the existing inputs for this artifact. Please verify each field,
  if all the fields are correct publish the artifact</p>
<form class=" needs-validation" method="POST" action="{{url('validateData/'.$artifact[0]["id"])}}" novalidate enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <!--GENERAL INFORMATION & SITE -->

  <fieldset>
    <legend>Site & General Information</legend>
    @include('forms.ceramics.verifysite')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
    @include('forms.ceramics.verifyfieldsI')
  </fieldset>

  <fieldset>
    <legend>Fields II Information</legend>
    @include('forms.ceramics.verifyfieldsII')
  </fieldset>
 
 

  <fieldset class="mt-2">
    <button class="btn btn-success" type="submit">Publish</button>
  </fieldset>


</form>


<script>
    //INITIALIZE THE POPP OVERS
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
  const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl)) 
</script>
<script src="{{asset('storage/js/verifynextform.js')}}"></script>


@endsection