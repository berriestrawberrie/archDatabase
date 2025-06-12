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
        <div class=" border mx-auto">
            <table class="table text-center" >
                <thead>
                  <tr>
                    <th >Cermaics</th>
                    <th >Bones</th>
                    <th >Beads</th>
                    <th >Buckle</th>
                    <th >Pipes</th>                                        
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-danger">{{count($unassigned_ceramics)}}</td>
                    <td class="text-danger">..</td>
                    <td class="text-danger">{{count($unassigned_beads)}}</td>
                    <td class="text-danger">{{count($unassigned_buckles)}}</td>         
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

@if(count($unassigned_ceramics) + count($unassigned_beads)>0)
<form class=" needs-validation rounded border p-2" method="POST" action="{{route('checkout.data')}}" novalidate>
    @csrf
      <div class="row">
        @include('admin.verifycomponents.checkouts')


      </div><!--END OF ALL CHECKOUT FORMS-->
    

      <div class="col-12 mt-4">
        <button class="btn btn-danger" type="submit" id="checkitout" disabled>Check Out</button>
      </div>
</form>
@else
<h3 class="text-success"> There are no unassigned records that require validation </h3>
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
                 @include('admin.verifycomponents.assignedtable')
                </tbody>
              </table>
        </div>
    </div>
</div>

<script src="{{asset('storage/js/adminverifydata.js')}}"></script>
@endsection