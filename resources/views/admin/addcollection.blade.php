@extends('layouts.app')
@section('title') New Collection @endsection

@section('content')
<h1 class="text-center">Admin Collections:</h1>

<h2>Adding a New Collection:</h2>
<p>Use this page to create and catalog a new archival collection. 
    Provide key details such as the collection title, description, 
    date range, associated people or organizations, and relevant subjects or formats. 
    Attach any finding aids or digitized materials, and assign access levels to control visibility. 
    This form helps ensure your archival records are well-organized, searchable, and preserved for long-term access.
</p>


<!--COLLECTIONS CRUD -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Add Collection</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Update Collection</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">TBD</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active border bg-white" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <form method="POST" action="{{route('collections.post')}}">
            @csrf
            <h3>Enter Collection Information:</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Title *:</span>
                    <input type="text" class="form-control" placeholder="Enter the collection title" aria-label="Username" aria-describedby="basic-addon1" name="title" required>
                  </div>
    
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text">Curator :</span>
                    <input type="text" class="form-control" placeholder="Enter curator name & title" aria-label="Enter curator name and title" name="curator" >
                  </div>
                  
                  <div class="form-text" id="basic-addon4">Collection Description: Write a briew summary of collection</div>
                  <div class="input-group">
                    <span class="input-group-text">Collection Description*</span>
                    <textarea class="form-control" aria-label="With textarea"  aria-describedby="basic-addon4" name="text" required></textarea>
                  </div>
                  <div class="input-group">
                    <input type="submit" class="btn btn-primary">
                  </div>
    </form>
    </div><!--END OF HOME TAB-->


    <div class="tab-pane fade bg-white border" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <p>You can update the collection assigned curator, artifacts list, display image, or published description</p>
        <form method="POST" action="{{route('update.collections')}}">
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
        
    </div><!--END OF PROFILE TAB-->




    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>



    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
  </div>

<!--COLLECTIONS CRUD END-->


  <!--COLLECTIONS ACCORDION-->
<h2>All Current Collections:</h2>


<div class="accordion" id="accordionExample">
    
    @foreach($collections as $collection)
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$collection->id}}" aria-expanded="true" aria-controls="collapse{{$collection->id}}">
                {{$collection->collection}}
            </button>
            </h2>
            <div id="collapse{{$collection->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Curator: {{$collection->curator}}</strong> 
                <p>{{$collection->collection_desc}}</p>
            </div>
            </div>
        </div>
    @endforeach
  
</div>

<!--END OF ACCORDION-->




@endsection