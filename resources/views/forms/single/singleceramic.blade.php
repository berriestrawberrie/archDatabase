@extends('layouts.app')

@section('title') Preview Ceramic @endsection


@section('page-title')

Review Ceramic

@endsection

@section('content')



<form class=" needs-validation" novalidate enctype="multipart/form-data">
  <!--GENERAL INFORMATION & SITE -->
  <fieldset>
    <legend>Site & General Information</legend>
  </fieldset>

  <fieldset>
    <legend>Fields I Information</legend>
  </fieldset>

  <fieldset>
    <legend>Fields II Information</legend>
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