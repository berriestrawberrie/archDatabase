@extends('layouts.app')
@section('title') Artifact Queries @endsection

@section('page-title') 
Query by Artifact Types Characteristics
@endsection

@section('content')

<form class=" needs-validation" method="POST" action="#" novalidate enctype="multipart/form-data">

    <p>View artifacts by type. You may select artifacts by..</p>

    <fieldset>
        <legend>Filters</legend>
        <div class="row">
            <!--COLLECTION-->
            <div class="col d-flex flex-column mb-4">
                <label for="collection" class="form-label" >Collection Title:<span class="text-danger">*</span></label>
                <select class="form-select" name="collection" id="collection" required>
                    @for($i = 0 ; $i < count($collections); $i++)
                    <option>{{$collections[$i]["collection"]}}</option>
                    @endfor
                </select>
                <div class="invalid-feedback">
                    Required field..
                </div>
            </div><!--END OF COLLECTION-->
            <!--START DATE-->
            <div class="col-2">
                <label for="start_date" class="form-label" >Start Date</label>
                <select class="form-select" name="start_date" id="start_date" required>
                    <option value="0">--</option>
                    <option>1500</option>
                    <option>1600</option>
                    <option>1700</option>
                    <option>1800</option>
                    <option>1900</option>
                </select>
            </div><!--end OF START DATE-->
            <!--END DATE-->
            <div class="col-2">
                <label for="end_date" class="form-label" >End Date</label>
                <select class="form-select" name="end_date" id="end_date" required>
                    <option value="0">--</option>
                    <option>1500</option>
                    <option>1600</option>
                    <option>1700</option>
                    <option>1800</option>
                    <option>1900</option>
                </select>
            </div><!--end OF START DATE-->

        </div><!--END OF ROW-->

        
        <div class="row">
        <!--ARTIFACT TYPES-->
        <div class="col ">
            <label for="artifact_types[]" class="form-label" >Artifact Types:<span class="text-danger">*</span></label>
            <div class="d-flex gap-4">
                @include('queries.collectionsartifactcheck')
            </div>
            <div class="invalid-feedback">
                Required field.
            </div>
            </div><!--END OF COLLECTION-->
        </div><!--END OF ROW-->




    </fieldset>
</form>

@endsection