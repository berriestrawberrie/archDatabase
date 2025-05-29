@extends('layouts.app')
@section('title') Query Artifacts @endsection

@section('page-title') 
Query Artifacts
@endsection

@section('content')


<h2>In-Progress</h2>
Currently just displaying the data in the ceramics table. 

<table class="table table-hover table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col">Index</th>
        <th scope="col">Collection</th>
        <th scope="col">Entered Date</th>
        <th scope="col">Artifact ID</th>
        <th scope="col">Material</th>
        <th scope="col">Completeness</th>
        <th scope="col">Photo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ceramics as $ceramic)

      <tr>
        <th scope="row">{{$ceramic->id}}</th>
        <td>{{$ceramic->collection}}</td>
        <td>{{$ceramic->created_at}}</td>
        <td>{{$ceramic->artifact_id}}</td>
        <td>{{$ceramic->material}}</td>
        <td>{{$ceramic->completeness}}</td>
        <td><img src="{{asset('uploads/ceramics/'.$ceramic->photo)}}" width="50"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$ceramic->id}}">
             <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$ceramic->id}}" tabindex="-1" aria-labelledby="exampleModal{{$ceramic->id}}" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--HEADER-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('uploads/ceramics/'.$ceramic->photo)}}" width="500">
                    </div>
                    <div class="modal-footer">
                    <!--FOOTER-->
                    </div>
                </div>
                </div>
            </div>
            <!--END OF MODAL-->


        </td>
      </tr>

      @endforeach
    
    </tbody>
  </table>


<script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>



@endsection