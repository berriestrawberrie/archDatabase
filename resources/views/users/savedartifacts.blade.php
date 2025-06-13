@extends('layouts.app')
@section('title')My Artifacts @endsection

@section('page-title')

Saved Artifacts

@endsection

@section('content')


<h2>Saved Artifacts Not Yet Submitted for Validation: </h2>
<p>These are records that have been saved but not yet submitted to admin for validation.</p>


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
                                @if($ceramic->isValid === 2)
                                Incomplete
                                @else
                                Error
                                @endif
                            </td>
                            <td>{{$ceramic->collection}}</td>
                            <td>{{$ceramic->material}}</td>
                            <td><a href="/previewData/ceramic/{{$ceramic->token.'/'.Auth::user()->id}}"><button class="btn btn-warning">Complete</button></a></td>

                        </tr>
                 @endforeach
                 @foreach($beads as $bead)
                        <tr>
                            <td>{{$bead->artifact_id}}</td>
                            <td>bead</td>
                            <td >
                                @if($bead->isValid === 2)
                                Incomplete
                                @else
                                Error
                                @endif
                            </td>
                            <td>{{$bead->collection}}</td>
                            <td>{{$bead->material}}</td>
                            <td><a href="/previewData/bead/{{$bead->token.'/'.Auth::user()->id}}"><button class="btn btn-warning">Complete</button></a></td>

                        </tr>
                 @endforeach
                @foreach($buckles as $buckle)
                        <tr>
                            <td>{{$buckle->artifact_id}}</td>
                            <td>buckle</td>
                            <td >
                                @if($buckle->isValid === 2)
                                Incomplete
                                @else
                                Error
                                @endif
                            </td>
                            <td>{{$buckle->collection}}</td>
                            <td>{{$buckle->material}}</td>
                            <td><a href="/previewData/buckle/{{$buckle->token.'/'.Auth::user()->id}}"><button class="btn btn-warning">Complete</button></a></td>

                        </tr>
                 @endforeach
                @foreach($buttons as $button)
                        <tr>
                            <td>{{$button->artifact_id}}</td>
                            <td>button</td>
                            <td >
                                @if($button->isValid === 2)
                                Incomplete
                                @else
                                Error
                                @endif
                            </td>
                            <td>{{$button->collection}}</td>
                            <td>{{$button->material}}</td>
                            <td><a href="/previewData/button/{{$button->token.'/'.Auth::user()->id}}"><button class="btn btn-warning">Complete</button></a></td>

                        </tr>
                 @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection