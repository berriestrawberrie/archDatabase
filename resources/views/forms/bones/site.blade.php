
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

    <!--PROVENIENCE-->
    <div class="col-3">
        <label for="proveniencce" class="form-label">Provenience</label>
        <input type="text" class="form-control " id="provenience"  name="provenience"  required>
        <div class="invalid-feedback">
           Required field.
        </div>
      </div><!--END COL-->

    <!--PROVENIENCE-->
    <div class="col-3">
        <label for="designated_id" class="form-label">Designation/ID</label>
        <input type="text" class="form-control " id="designated_id"  name="designated_id"  required>
        <div class="invalid-feedback">
            Required field.
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


 



