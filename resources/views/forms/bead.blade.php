@extends('layouts.app')
@section('title') Bead Form @endsection


 
@section('content') 

<h1>Bead Form Here!</h1>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
  <i class="fa-solid fa-question"></i>
</button>


<form class="needs-validation" novalidate>


</form><!--END OF FORM -->

<script src="{{asset('storage/js/nextform.js')}}"></script>
@endsection