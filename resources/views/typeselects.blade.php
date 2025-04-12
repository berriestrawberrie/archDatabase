@extends('layouts.app')

@section('title')Select Collection @endsection


@section('content')
<select id="max" class="d-none"><option selected value="{{count($collections)}}">MaxCollections</option></select>

<h2>1. Select a collection </h2>
<p>First you must select the collection for the artifact to be added to</p>
<form method="POST" action="" class="mb-5">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Select a Collection:</label>
      <div class="col-sm-8">
        
        <select onchange=filterCollection() class="form-select" aria-label="Default select a collection" name="selected" id="selected" required>
            <option value="false">--</option>
            @foreach($collections as $collection)
                <option value="{{$collection->id}}">{{$collection->collection}}</option>
            @endforeach
          </select>

      </div>
      <button type="submit" class="col-sm-1 btn btn-primary">Update</button>
    </div>
  </form>
  <h2>2. Select Artifact Type </h2>
  <p class="mb-5">After selecting collection the available artifact types will populate. </p>
 
    @for($i=0;$i< count($collections); $i++)
    <div style="display:none;"class="container-sm flex-wrap  justify-content-start position-relative" id="{{$collections[$i]["id"]}}">
        <h3 class="position-absolute" style="top: -30px;">{{$collections[$i]["id"]}}: {{$collections[$i]["collection"]}}</h3>
     @for($y=0; $y<count($art_types[$i]);$y++)

        <div class="d-flex align-items-center border rounded-3 m-2 p-2" >
            <img src="{{asset('storage/images/picture.png')}}" width="100">
            <div >
                <h5 class="card-title">{{$art_types[$i][$y]}}</h5>
            <p class="card-text">  Description for: {{$art_types[$i][$y]}} </p>

            </div>
        </div>
     @endfor
    </div>
   @endfor

   <script src={{asset('storage/js/typeSelect.js')}}>
    </script>

@endsection