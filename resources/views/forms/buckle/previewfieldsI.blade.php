<!--FIELDS I ROW IMAGE-->
<div class="row">

    <div class="col-5">
        <!--Buckle Type-->
        <div class="col">
            <label for="buckle_type" class="form-label">Buckle Type</label>
            <select class="form-select " id="buckle_type"  name="buckle_type" required>
                <option value="{{$artifact[0]["buckle_type"]}}">{{$artifact[0]["buckle_type"]}}</option>
                <option>Baldric/Sash</option>
                <option>Knee</option>
                <option>Shoe</option>
                <option>Spur</option>
                <option>Stock</option>
                <option>Unid: Clothing</option>
                <option>Unid:Harness/Utilitarian</option>
                <option>Unidentifiable</option>
            </select>    
            <div class="invalid-feedback">
                 Required field.
            </div>
        </div><!--END COL-->

        <!--Buckle Form-->
        <div class="col">
            <label for="buckle_form" class="form-label">Buckle Form</label>
            <select class="form-select " id="buckle_form"  name="buckle_form" required>
                <option value="{{$artifact[0]["buckle_form"]}}">{{$artifact[0]["buckle_form"]}}</option>
                <option>Frame</option>
                <option>Hook</option>
                <option>Pin</option>
                <option>Stud</option>
                <option>Tongue</option>
            </select>
            <div class="invalid-feedback">
                    Required field. 
            </div>
        </div><!--END COL-->
    

        <!--Frame Plating-->
        <div class="col">
            <label for="frame_plating" class="form-label">Frame Plating</label>
            <select class="form-select " id="frame_plating"  name="frame_plating" required>
                <option  value="{{$artifact[0]["frame_plating"]}}">{{$artifact[0]["frame_plating"]}}</option>
                <option>Gilt</option>
                <option>None</option>
                <option>Not Recorded</option>
                <option>Silver</option>
                <option>Tin</option>
                <option>Unidentifiable</option>

            </select>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Manufacturing Technique-->
        <div class="col">
            <label for="manufacturing_technique" class="form-label">Manufacturing Technique</label>
            <select class="form-select" id="manufacturing_technique" name="manufacturing_technique" required>
                <option   value="{{$artifact[0]["manufacturing_technique"]}}"> {{$artifact[0]["manufacturing_technique"]}}</option>
                <option>Cast</option>
                <option>Forged</option>
                <option>Not Recorded</option>
                <option>Stamped</option>
                <option>Unidentifiable</option>

            </select>
            <div class="invalid-feedback">
             Required field.
            </div>
        </div><!--END COL-->

    </div>

    <div class="col border me-2 rounded d-flex justify-content-evenly align-items-center">

         <!--HAS IMAGE -->
        <div class="col-2 form-check d-flex flex-column ">
            <p style="margin-left: -30px;">Photo</p>
            
            <label class="form-check-label" for="has_photo1">
                <input onchange="showImgUpload(this)" class="form-check-input" type="radio" name="has_photo" id="has_photo1" value="1"checked >Keep</label>
            <label class="form-check-label mt-3" for="has_photo2">
                <input onchange="showImgUpload(this)" class="form-check-input" type="radio" name="has_photo" id="has_photo2" value="0">Remove</label>
            <label class="form-check-label mt-3" for="has_photo3">
                <input onchange="showImgUpload(this)" class="form-check-input" type="radio" name="has_photo" id="has_photo3" value="2">Replace</label>

            <div class="invalid-feedback">
                Must make a selection.
            </div>
        </div><!--END COL-->

        <div class="col-8">
            <img  id="file-ip-1-preview" src="{{asset('uploads/buckles/'.$artifact[0]["photo"])}}"style="width: 200px; ">
            <img id="file-noimage" src="{{asset('uploads/beads/null.png')}}" style="width: 200px; display:none; opacity: .5;">
            <!--IMAGE UPLOAD -->
            <div class="position-relative"id="image-uploader" style="opacity: 0;">
                <label for="photo" class="form-label">Upload Photo</label>
                <input onchange="showPreview(event);" type="file" class="form-control " id="file-ip-1" name="photo" accept="image/png, image/jpeg, image/jpg"/>
                <div class="invalid-feedback">
                    Must include image (png, jpeg).
                </div>
                <button class="d-none position-absolute top-0 end-0 btn-x" type="button" id="cancel_photo"><i class="fa-solid fa-circle-xmark"></i></button>
            </div><!--END COL-->
        </div>



    </div>



</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-4">
    <!--Element Type-->
    <div class="col">
        <label for="element_type" class="form-label">Element Type</label>
        <select class="form-select " id="element_type"  name="element_type" required>
            <option  value="{{$artifact[0]["element_type"]}}">{{$artifact[0]["element_type"]}}</option>
            <option>Double Framed</option>
            <option>Double Prong</option>
            <option>Equidistant</option>
            <option>Long Axis</option>
            <option>Not Applicable</option>
            <option>Short Axis</option>
            <option>Single Framed</option>
            <option>Single Prong</option>
            <option>Solid</option>
            <option>Triple Prong</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Shape-->
    <div class="col">
        <label for="shape" class="form-label">Shape</label>
        <select class="form-select " id="shape"  name="shape" required>
            <option  value="{{$artifact[0]["shape"]}}">{{$artifact[0]["shape"]}}</option>
            <option>Anchor</option>
            <option>Circle</option>
            <option>D-Shaped</option>
            <option>Loop</option>
            <option>Not Applicable</option>
            <option>Oval</option>
            <option>Square/Rectangle</option>
            <option>Straight</option>
            <option>Stud</option>
            <option>Trapezoid</option>
            <option>Type 1 Pin Terminal</option>
            <option>Type 2 Pin Terminal</option>
            <option>Type 3 Pin Terminal</option>
            <option>Type 4 Pin Terminal</option>
            <option>Type 5 Pin Terminal</option>
            <option>Type 6 Pin Terminal</option>
            <option>Unid: Angular</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->


    <!--Buckle Length-->
    <div class="col-3">
        <label for="buckle_length" class="form-label">Buckle Length
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful field explainer here?">
                <i class="fa-solid fa-circle-question"></i></button>
        </label>
        <input type="number" class="form-control " id="buckle_length"  name="buckle_length"  min="0"  step="0.01" value="{{$artifact[0]["buckle_length"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-2">

    <!--Post-Manufacturing Modification-->
    <div class="col">
        <label for="post_manu_mod" class="form-label">Post-Manufacturing Modification</label>
        <select class="form-select " id="post_manu_mod"  name="post_manu_mod" required>
            <option value="{{$artifact[0]["post_manu_mod"]}}">{{$artifact[0]["post_manu_mod"]}} </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--Buckle Part-->
    <div class="col">
        <label for="buckle_part" class="form-label">Buckle Part</label>
        <select class="form-select " id="buckle_part"  name="buckle_part" required>
            <option  value="{{$artifact[0]["buckle_part"]}}">{{$artifact[0]["buckle_part"]}}</option>
            <option>Frame</option>
            <option>Hook</option>
            <option>Pin</option>
            <option>Stud</option>
            <option>Tongue</option>

        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->
    

    <!--Buckle Width-->
    <div class="col-3">
        <label for="buckle_width" class="form-label">Buckle Width</label>
        <input type="number" class="form-control " id="buckle_width"  name="buckle_width" min="0"  step="0.01" value="{{$artifact[0]["buckle_width"]}}" required>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-3 ">
    
     <!--Decoration Technique-->
     <div class="col">
        <label for="decorative_technique" class="form-label">Decoration Technique</label>
        <select class="form-select " id="decorative_technique"  name="decorative_technique" required>
            <option value="{{$artifact[0]["decorative_technique"]}}">{{$artifact[0]["decorative_technique"]}}</option>
                <option>Cast/Molded</option>
                <option>Enameled</option>
                <option>Engraved</option>
                <option>Jewel/Inlay</option>
                <option>Stamped</option>
        </select>
            <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--MENDED-->
    <div class="col">
        <label for="mended" class="form-label">Mended?</label>
        <select class="form-select " id="mended"  name="mended" required>
            <option  value="{{$artifact[0]["mended"]}}"> {{$artifact[0]["mended"]}} </option>
            <option>Yes</option>
            <option>No</option>
            <option>Not Recorded</option>

        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->
    
    <!--Material-->
    <div class="col">
        <label for="material" class="form-label">Material</label>
        <select class="form-select " id="material"  name="material" required>
            <option  value="{{$artifact[0]["material"]}}">{{$artifact[0]["material"]}}</option>
            <option>Copper Alloy</option>
            <option>Gold</option>
            <option>Missing</option>
            <option>Iron</option>
            <option>Pewter</option>
            <option>Silver</option>
            <option>Steel</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->


<!--FIELDS I  ROW -->
<div class="row">
    <!--Conservation-->
    <div class="col">
        <label for="conservation" class="form-label">Conservation</label>
        <input type="text" class="form-control " id="conservation"  name="conservation" value="{{$artifact[0]["conservation"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


    <!--Burned?-->
    <div class="col">
        <label for="burned" class="form-label">Burned?</label>
        <select class="form-select " id="burned"  name="burned" required>
            <option  value="{{$artifact[0]["burned"]}}">{{$artifact[0]["burned"]}}</option>
            <option>Yes</option>
            <option>No</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->



    <!--Object Weight-->
    <div class="col">
        <label for="obj_weight" class="form-label">Object Weight</label>
        <input type="number" class="form-control " id="obj_weight"  name="obj_weight" min="0"  step="0.01"  value="{{$artifact[0]["obj_weight"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS ROW-->
    <!--Decorative Motif-->
    <div class="col">
        <label for="decorative_motif" class="form-label">Decorative Motif</label>
        <select class="form-select " id="decorative_motif"  name="decorative_motif" required>
            <option  value="{{$artifact[0]["decorative_motif"]}}"> {{$artifact[0]["decorative_motif"]}}</option>
            <option>Beaded</option>
            <option>Fan/Shell</option>
            <option>Foliate</option>
            <option>Geometric</option>
            <option>Lettering</option>
            <option>Military Emblem</option>
            <option>None</option>
            <option>Notched and Grooved</option>
            <option>Openwork</option>
            <option>Ornamental Grooves</option>
            <option>Ribbed</option>
            <option>Scrolls</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->
<!--END OF FIELDS ROW-->


<!--FIELDS I ROW -->
<div class="row">
    <!--Marks->
    <div class="col-2">
        <label for="marks" class="form-label">Marks?</label>
        <select class="form-select " id="marks"  name="marks" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Mark Notes -->
    <div class="col">
        <label for="mark_notes" class="form-label">Mark Notes
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful explainer">
                <i class="fa-solid fa-circle-question"></i>
          </button>
        </label>
        <textarea class="form-control " id="mark_notes"  name="mark_notes" value="{{$artifact[0]["mark_notes"]}}" rows="3"></textarea>

    </div><!--END COL-->



</div><!--END ROW-->
