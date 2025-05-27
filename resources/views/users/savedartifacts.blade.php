@extends('layouts.app')
@section('title')My Artifacts @endsection

@section('page-title')

<h1 class="text-center">Saved Artifacts</h1>

@endsection

@section('content')


<h2>Saved Artifacts Not Submitted for Validation: </h2>
<p>Select the number of records you'd like to checkout and review for publishing:</p>


<h2>Checked Out Records:</h2>
<div class="container">
    <div class="row">
        <div class="col border ">
            <table class="table text-center" >
                <thead>
                  <tr>
                    <th scope="col">Artifact ID</th>
                    <th scope="col">Artifact Table</th>
                    <th scope="col">Status</th>
                    <th scope="col">Collection</th>
                    <th scope="col">Material</th>
                    <th scope="col">Complete Review</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach($ceramics as $ceramic)
                        <tr>
                            <td>{{$ceramic->artifact_id}}</td>
                            <td>ceramic</td>
                            <td >
                                @if($ceramic->isValid == 2)
                                Incomplete
                                @else
                                Error
                                @endif
                            </td>
                            <td>{{$ceramic->collection}}</td>
                            <td>{{$ceramic->material}}</td>
                            <td><a href="/previewData/{{$ceramic->artifact_id.'/'.Auth::user()->id}}"><button class="btn btn-warning">Complete</button></a></td>

                        </tr>
                 @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection