@extends('layouts.app')
@section('title') Buckle Form @endsection


@section('page-title')

<h1 class="text-center">Buckle Artifact Entry Form</h1>

@endsection



@section('content')
<form class=" needs-validation" method="POST" action="#" novalidate enctype="multipart/form-data">
  @csrf
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <legend>Site & General Information</legend>
    @include('forms.buckle.site')
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
     @include('forms.buckle.fieldsI')
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