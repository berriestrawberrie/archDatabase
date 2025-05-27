  <div class="row align-items-center">
  <div class="col-auto mt-4">
    <label for="inputPassword6" class="col-form-label">{{substr($artifact[0]["artifact_id"], 0,9)}}</label>
    <input class="d-none" type="text" value="{{substr($artifact[0]["artifact_id"], 0,9)}}" name="preID">
  </div>  
    <!--3DIGIT ARTIFACT CODE-->
    <div class="col-2">
        <label for="artifact_id" class="form-label">Artifact ID (3-Digit)</label>
        <input type="text" class="form-control"name="artifact_id"  pattern="\d{3}" value={{substr($artifact[0]["artifact_id"], 9,3)}} required>
        <div class="invalid-feedback">
            3 digit number required.
        </div>
    </div><!--END COL-->
    <!--ARTIFACT SUBSET-->
    <div class="col-1">
        <label for="subset" class="form-label">Subset</label>
        <input type="text" class="form-control" id="subset"  name="subset" 
        value=
        @if(strlen($artifact[0]["artifact_id"])>12)
            {{substr($artifact[0]["artifact_id"], 12,strlen($artifact[0]["artifact_id"]))}}
        @else
            ""
        @endif >
    </div><!--END COL-->
</div><!--END OF ROW-->

  <!--GENERAL INFORMATION & SITE ROW 1-->
  <div class="row">
    <!--ENTEREDBY-->
    <div class="col">
        <label for="entered_by" class="form-label">Entered By</label>
        <input type="text" class="form-control border" id="entered_by"  name="entered_by" value="{{$artifact[0]["Added By"]}}" required>
        <div class="invalid-feedback">
            enter your name
        </div>
    </div><!--END COL-->

    <!--DATE ENTERED-->
    <div class="col-3">
      <label for="created_at" class="form-label">Entered Date</label>
      <input type="date" class="form-control border" id="created_at"  name="created_at" value="{{ date('Y-m-d', strtotime($artifact[0]["created_at"])) }}" required>
      <div class="invalid-feedback">
          Enter a valid date.
      </div>
    </div><!--END COL-->

    <!--FORM-->
    <div class="col-3">
        <label for="completeness" class="form-label">Completeness</label>
        <select class="form-control border" id="completeness"  name="completeness" required>
            <option   value="{{$artifact[0]["completeness"]}}">{{$artifact[0]["completeness"]}}</option>
            <option  value="base">base</option>
            <option  value="base/body">base/body</option>
            <option  value="base/body/handle">base/body/handle</option>
            <option  value="base/body/rim">base/body/rim</option>
            <option  value="body">body</option>
            <option  value="body/handle">body/handle</option>
            <option  value="body/hand/rim">body/hand/rim</option>
            <option  value="body/handle/terminal">body/handle/terminal</option>
            <option  value="body/handle/spout">body/handle/spout</option>
            <option  value="body/rim">body/rim</option>
            <option  value="body/shoulder">body/shoulder</option>
            <option  value="body/shoulder/neck">body/shoulder/neck</option>
            <option  value="body/spout">body/spout</option>
            <option  value="detached glaze">detached glaze</option>
            <option  value="finial">finial</option>
            <option  value="finial lid">finial lid</option>
            <option  value="foot">foot</option>
            <option  value="handle">handle</option>
            <option  value="handle terminal">handle terminal</option>
            <option  value="lid">lid</option>
            <option  value="neck">neck</option>
            <option  value="neck/handle terminal/rim">neck/handle terminal/rim</option>
            <option  value="neck/rim">neck/rim</option>
            <option  value="not applicable">not applicable</option>
            <option  value="not recorded">not recorded</option>
            <option  value="rim">rim</option>
            <option  value="shoulder">shoulder</option>
            <option  value="shoulder/handle/terminal">shoulder/handle/terminal</option>
            <option  value="shoulder/neck">shoulder/neck</option>
            <option  value="shoulder/neck/rim">shoulder/neck/rim</option>
            <option  value="spout">spout</option>
            <option  value="unidentifiable">unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Must select completeness.
        </div>
    </div><!--END COL-->

    <!--ARTIFACT COUNT-->
    <div class="col-2">
        <label for="artifact_count" class="form-label">Artifact Count</label>
        <input type="number" class="form-control border" id="artifact_count"  value="{{$artifact[0]["artifact_count"]}}"name="artifact_count" min="1" max="99" required>
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
        <label for="collection" class="form-label">Collection</label>
        <input type="text" class="form-control border" id="collection"  name="collection" value="{{$artifact[0]["collection"]}}" required>
        <div class="invalid-feedback">
            Title: {{$artifact[0]["collection"]}}
        </div>
    </div><!--END COL-->


</div><!--END ROW-->


<!--GENERAL INFORMATION & SITE ROW 3-->
<div class="row">
    <!--NOTES-->
    <div class="col">
        <label for="notes" class="form-label">Notes 
            <button type="button" class="btn btn-secondary btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Field notes describe your artifact notes">
            <i class="fa-solid fa-question"></i>
          </button>
        </label>
        <textarea class="form-control border" id="notes"  name="notes" value="{{$artifact[0]["notes"]}}" rows="3"></textarea>
    </div><!--END COL-->
</div>
<!--END ROW-->


 



