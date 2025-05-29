@extends('layouts.app')
@section('title')Verify Data @endsection

@section('page-title')

Data Verification Queue

@endsection

@section('content')
<p>The following table shows how many artifacts have been submitted for validation. 
    These submissions will not be viewable in database queries until an an administrator reviews accepts the submission. 
</p>
<!--QUEUE TABLE-->
<div class="container">
    <div class="row">
        <div class="col-4 border mx-auto">
            <table class="table text-center" >
                <thead>
                  <tr>
                    <th scope="col">Cermaics</th>
                    <th scope="col">Bones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-danger">{{count($unassigned_ceramics)}}</td>
                    <td class="text-danger">..</td>
            
                  </tr>
            
                </tbody>
              </table>
        </div>
    </div>
</div>
<!--END OF QUEUE TABLE-->

<h2>To Validate Data Checkout Artifact Records</h2>
<p>Select the number of records you'd like to checkout and review for publishing:</p>

@if(count($unassigned_ceramics)>0)
<form class=" needs-validation rounded border p-2" method="POST" action="{{route('checkout.data')}}" novalidate>
    @csrf
      <div class="row">
          <!--CERAMICS CHECKOUT-->
          <div class="col-md-2">
              <label for="ceramics" class="form-label">Max ({{count($unassigned_ceramics)}})</label>
              <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">Ceramics</span>
                  <select type="text" class="form-control" id="ceramics" name="ceramics" aria-describedby="inputGroupPrepend">
                      <option value="0">-</option>
                      @for($i=1; $i <= count($unassigned_ceramics); $i++)
                          <option value="{{$i}}">{{$i}}</option>
                      @endfor
                  </select>
                  <div class="valid-feedback">
                  filled
                  </div>
              </div>
              </div>
          <!--BONES CHECKOUT-->
          <div class="col-md-2">
              <label for="bones" class="form-label">Max (--)</label>
              <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">Bones</span>
                  <select type="text" class="form-control" id="bones" name="bones" aria-describedby="inputGroupPrepend">
                      <option value="0">-</option>
                      @for($i=1; $i < count($ceramics); $i++)
                          <option value="{{$i}}">{{$i}}</option>
                      @endfor
                  </select>
                  <div class="valid-feedback">
                  filled
                  </div>
              </div>
              </div>

      </div>
    

      <div class="col-12 mt-4">
        <button class="btn btn-primary" type="submit">Check Out</button>
      </div>
</form>
@else
<h3 class="text-success"> There are no unvalidated records </h3>
@endif





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
                    <th scope="col">Review</th>
                    <th scope="col">Release</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($ceramics as $ceramic)
                    @if($ceramic->checkout_by == Auth::user()->id && $ceramic->isValid == 0)
                        <tr>
                            <td>{{$ceramic->artifact_id}}</td>
                            <td>ceramic</td>
                            <td >
                                @if($ceramic->isValid == 0)
                                Unverified
                                @else
                                Verified
                                @endif
                            </td>
                            <td>{{$ceramic->collection}}</td>
                            <td>{{$ceramic->material}}</td>
                            <td><a href="/reviewData/{{Auth::user()->id}}/ceramic/{{$ceramic->id}}"><button class="btn btn-success">Review</button></a></td>
                            <td>
                                <form method="POST" action="{{route('release.data')}}">@csrf<input type="number" class="d-none" value="{{$ceramic->id}}" name="release_ceramic">
                                </select><button class="btn btn-danger" type="submit">Release</button></form>
                            </td>
                    
                        </tr>
                    @endif
                 @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection