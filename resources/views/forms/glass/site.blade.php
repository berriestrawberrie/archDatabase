  <!--GENERAL INFORMATION & SITE ROW 1-->
  <div class="row">
    <!--ENTEREDBY-->
    <div class="col">
        <label for="entered_by" class="form-label">Entered By</label>
        <input type="text" class="form-control border border-success bg-success-subtle" id="entered_by"  name="entered_by" value="{{Auth::user()->name}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--DATE ENTERED-->
    <div class="col-3">
      <label for="created_at" class="form-label">Entered Date</label>
      <input type="date" class="form-control border border-success bg-success-subtle" id="created_at"  name="created_at" value="{{date('Y-m-d')}}" required>
      <div class="invalid-feedback">
           Required field.
      </div>
    </div><!--END COL-->

    <!--FORM-->
    <div class="col-3">
        <label for="completeness" class="form-label">Completeness</label>
        <select class="form-control " id="completeness"  name="completeness" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Base</option>
            <option>Base Body</option>
            <option>Base Body Rim</option>
            <option>Base Body Shoulder</option>
            <option>Base Body Shoulder Neck</option>
            <option>Body</option>
            <option>Body Handle</option>
            <option>Body Rim</option>
            <option>Body Shoulder</option>
            <option>Body Shoulder Neck</option>
            <option>Body Shoulder Neck Finish</option>
            <option>Complete Object</option>
            <option>Cover/Lid</option>
            <option>Finial</option>
            <option>Finish</option>
            <option>Finish Neck</option>
            <option>Foot</option>
            <option>Foot Stem</option>
            <option>Foot Stem Body</option>
            <option>Handle</option>
            <option>Neck</option>
            <option>Neck Finish</option>
            <option>Not Recorded</option>
            <option>Rim</option>
            <option>Seal</option>
            <option>Shoulder</option>
            <option>Shoulder Neck</option>
            <option>Shoulder Neck Finish</option>
            <option>Stem</option>
            <option>Stem Body</option>
            <option>Stopper</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->

    <!--ARTIFACT COUNT-->
    <div class="col-2">
        <label for="artifact_count" class="form-label">Artifact Count</label>
        <input type="number" class="form-control " id="artifact_count"  name="artifact_count" min="1" max="99" required>
        <div class="invalid-feedback">
             Required field. and less than 99.
        </div>
    </div><!--END COL-->

</div>
<!--END ROW-->

<!--GENERAL INFORMATION & SITE ROW 2-->
<div class="row">
    <!--COLLECTION-->
    <div class="col">
        <label for="collection" class="form-label">Collection</label>
        <input type="text" class="form-control border border-success bg-success-subtle" id="collection"  name="collection" value="{{$collections[0]["collection"]}}" required>
        <div class="invalid-feedback">
            Title: {{$collections[0]["collection"]}}
        </div>
    </div><!--END COL-->
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
        <textarea class="form-control " id="notes"  name="notes" placeholder="(Optional)" rows="3"></textarea>
    </div><!--END COL-->
</div>
<!--END ROW-->


 



