@extends('layouts.app')

@section('title')Select Collection @endsection


@section('content')

<h2>1. Select a collection </h2>
<p>First you must select the collection for the artifact to be added to</p>
<form method="POST" action="">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Select a Collection :</label>
      <div class="col-sm-8">
        
        <select class="form-select" aria-label="Default select a collection" name="selected" required>
            <option value="false">--</option>
            @foreach($collections as $collection)
                <option value="{{$collection->id}}">{{$collection->collection}}</option>
            @endforeach
          </select>

      </div>
      <button type="submit" class="col-sm-1 btn btn-primary">Update</button>
    </div>
  </form>

@endsection