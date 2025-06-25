  <!--GENERAL INFORMATION & SITE ROW 1-->
  <div class="row">
    <!--ENTEREDBY-->
    <div class="col">
        <label for="entered_by" class="form-label">Added By</label>
        <input type="text" class="form-control border border-danger bg-danger-subtle" id="added_by"  name="added_by" value="{{Auth::user()->name}}" required disabled>
        <div class="invalid-feedback">
            Please choose a username.
        </div>
    </div><!--END COL-->

    <!--DATE ENTERED-->
    <div class="col-3">
      <label for="created_at" class="form-label">Entered Date</label>
      <input type="date" class="form-control border border-danger bg-danger-subtle" id="created_at"  name="created_at" value="{{ date('Y-m-d', strtotime($artifact[0]["created_at"])) }}" required disabled>
      <div class="invalid-feedback">
          Enter a valid date.
      </div>
    </div><!--END COL-->

    <!--FORM-->
    <div class="col-3">
        <label for="completeness" class="form-label">Completeness</label>
        <select class="form-select  " id="completeness"  name="completeness" required>
            <option value="{{$artifact[0]["completeness"]}}">{{$artifact[0]["completeness"]}}</option>
            <option>Base</option>
            <option>Base, Bowl</option>
            <option>Base, Bowl, Rim</option>
            <option>Bowl, Complete</option>
            <option>Bowl Fragment</option>
            <option>Bowl, Rim</option>
            <option>Complete Pipe</option>
            <option>Mouthpiece</option>
            <option>Mouthpiece, Stem</option>
            <option>Rim</option>
            <option>Stem</option>
            <option>Stem, Base</option>
            <option>Stem, Base, Bowl</option>
            <option>Stem, Bowl</option>
            <option>Stem, Bowl, Rim</option>
            <option>Unidentified</option>
        </select>
        <div class="invalid-feedback">
            Must select completeness.
        </div>
    </div><!--END COL-->

    <!--ARTIFACT COUNT-->
    <div class="col-2">
        <label for="artifact_count" class="form-label">Artifact Count</label>
        <input type="number" class="form-control " value="{{$artifact[0]["artifact_count"]}}" id="artifact_count"  name="artifact_count" min="1" max="99" required>
        <div class="invalid-feedback">
            Artifact count must be entered and less than 99.
        </div>
    </div><!--END COL-->

</div>
<!--END ROW-->

<!--GENERAL INFORMATION & SITE ROW 2-->
<div class="row">
    <!--COLLECTION-->
    <div class="col">
        <input type="number" class="d-none" value="{{$artifact[0]["collection_id"]}}" name="collection_id">
        <label for="collection" class="form-label">Collection</label>
        <input type="text" class="form-control border border-danger bg-danger-subtle" id="collection"  name="collection" value="{{$artifact[0]["collection"]}}" required disabled>
        <div class="invalid-feedback">
            Title: {{$artifact[0]["collection"]}}
        </div>
    </div><!--END COL-->
    <!--START DATE-->
        <div class="col-3">
            <label for="start_date" class="form-label" >Start Date</label>
            <select class="form-select" name="start_date" id="start_date" onchange="checkRange()" required>
                <option value="{{$artifact[0]["start_date"]}}">{{$artifact[0]["start_date"]}}</option>
                <option >1500</option>
                <option>1600</option>
                <option>1700</option>
                <option>1800</option>
                <option>1900</option>
            </select>
        </div><!--end OF START DATE-->
        <!--END DATE-->
        <div class="col-2">
            <label for="end_date" class="form-label" >End Date</label>
            <select class="form-select" name="end_date" id="end_date" onchange="checkRange()" required>
                <option value="{{$artifact[0]["end_date"]}}">{{$artifact[0]["end_date"]}}</option>
                <option>1500</option>
                <option>1600</option>
                <option>1700</option>
                <option>1800</option>
                <option>1900</option>
            </select>
                <div class="invalid-feedback " id="end_error">
                End Date cannot be earlier than start date.
                </div>
        </div><!--end OF    end DATE-->

</div><!--END ROW-->


<!--GENERAL INFORMATION & SITE ROW 3-->
<div class="row">
    <!--NOTES-->
    <div class="col">
        <label for="notes" class="form-label">Notes 
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Field notes describe your artifact notes">
                <i class="fa-solid fa-circle-question"></i>
          </button>
        </label>
        <textarea class="form-control " id="notes"  name="notes" value="{{$artifact[0]["notes"]}}" rows="3"></textarea>
    </div><!--END COL-->
</div>
<!--END ROW-->


 



