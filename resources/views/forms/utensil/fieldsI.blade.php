<!--FIELDS I ROW IMAGE-->
<div class="row">

    <div class="col-5">
        <!--Utensil Material-->
        <div class="col">
            <label for="material" class="form-label">Utensil Material</label>
            <select class="form-select " id="material"  name="material" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Bone</option>
                <option>Ceramic</option>
                <option>Copper Alloy</option>
                <option>Iron</option>
                <option>Iron Alloy</option>
                <option>Lead Alloy</option>
                <option>Metal, unidentified</option>
                <option>Missing</option>
                <option>Pewter</option>
                <option>Plastic</option>
                <option>Silver</option>
                <option>Stone</option>
                <option>Unidentifiable</option>
                <option>Wood</option>
            </select>    
            <div class="invalid-feedback">
                 Required field.
            </div>
        </div><!--END COL-->

        <!-- Utensil Form-->
        <div class="col">
            <label for="utensil_form" class="form-label">Utensil Form</label>
            <select class="form-select " id="utensil_form"  name="utensil_form" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>1 Piece unidentifiable</option>
                <option>2 Piece unidentifiable</option>
                <option>Fork 1 Piece</option>
                <option>Fork 2 Piece</option>
                <option>Fork unidentifiable</option>
                <option>Knife 1 Piece</option>
                <option>Knife 2 Piece</option>
                <option>Knife unidentifiable</option>
                <option>Spoon 1 Piece</option>
                <option>Spoon 2 Piece</option>
                <option>Spoon unidentifiable</option>
                <option>Unidentifiable</option>
            </select>
            <div class="invalid-feedback">
                    Required field. 
            </div>
        </div><!--END COL-->
    

        <!--Plating-->
        <div class="col">
            <label for="plating" class="form-label">Plating</label>
            <select class="form-select " id="plating"  name="plating" required>
                <option disabled selected value> -- select an option -- </option>
                <option>Gold</option>
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

        <!--Handle Decoration-->
        <div class="col">
            <label for="handle_decoration" class="form-label">Handle Decoration</label>
            <select class="form-select" id="handle_decoration" name="handle_decoration" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Carved</option>
                <option>Inlay</option>
                <option>Molded</option>
                <option>None</option>
                <option>Not Applicable</option>
                <option>Not Recorded</option>
                <option>Painted under</option>
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
            <p style="margin-left: -30px;">Has Photo?</p>
            <label class="form-check-label" for="has_photo1">
                <input onchange="showImgUpload(this)" class="form-check-input" type="radio" name="has_photo" id="has_photo1" value="1">Yes</label>
            <label class="form-check-label mt-3" for="has_photo2">
                <input onchange="showImgUpload(this)" class="form-check-input" type="radio" name="has_photo" id="has_photo2" value="0">No</label>

            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <div class="col-8">
            <img id="file-ip-1-preview" style="width: 200px; display: none;">
            <img id="file-noimage" src="{{asset('storage/images/picture.png')}}" style="width: 200px; display:none; opacity: .5;">
            <!--IMAGE UPLOAD -->
            <div class="position-relative"id="image-uploader">
                <label for="photo" class="form-label">Upload Photo</label>
                <input onchange="showPreview(event);"type="file" class="form-control " id="file-ip-1"  name="photo" accept="image/png, image/jpeg, image/jpg" />
                <div class="invalid-feedback">
                    Must include image (png, jpeg).
                </div>
                <button class="d-none position-absolute top-0 end-0 btn-x" type="button" id="cancel_photo"><i class="fa-solid fa-circle-xmark"></i></button>
            </div><!--END COL-->
        </div>


    </div>



</div><!--END ROW-->

<hr>

<!--FIELDS I  ROW -->
<div class="row mt-4">
    <!-- Manufacturing Technique-->
    <div class="col">
        <label for="manufacturing_technique" class="form-label">Manufacturing Technique</label>
        <select class="form-select " id="manufacturing_technique"  name="manufacturing_technique">
            <option selected disabled value=""> -- select an option -- </option>
            <option>Carved</option>
            <option>Cast</option>
            <option>Forged</option>
            <option>Molded</option>
            <option>Stamped</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--Spoon Rat Tail-->
    <div class="col">
        <label for="spoon_rat" class="form-label">Spoon Rat Tail</label>
        <select class="form-select " id="spoon_rat"  name="spoon_rat" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->


    <!--Mended?-->
    <div class="col">
        <label for="mended" class="form-label">Mended?
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful field explainer here?">
                <i class="fa-solid fa-circle-question"></i></button>
        </label>
        <select class="form-select " id="mended"  name="mended" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Unid</option>
        </select>
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
        <select class="form-select" id="post_manu_mod"  name="post_manu_mod" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--Shape-->
    <div class="col">
        <label for="shape" class="form-label">Shape</label>
        <select class="form-select " id="shape"  name="shape" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Angular Handle</option>
            <option>Bilobed End</option>
            <option>Curved Blade</option>
            <option>Egg-Shaped Bowl</option>
            <option>Fig-Shaped Bowl</option>
            <option>Flat Tang</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Pistol Grip Handle</option>
            <option>Pointed Blade</option>
            <option>Pointed Tang</option>
            <option>Puritan Bowl</option>
            <option>Round-end Handle</option>
            <option>Square-end Handle</option>
            <option>Straight Blade</option>
            <option>Trifid End</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->
    

    
    <!--Burned?-->
    <div class="col">
        <label for="burned" class="form-label">Burned?</label>
        <select class="form-select " id="burned"  name="burned" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/A (Not Applicable)</option>
            <option>N/R (Not Recorded)</option>
            <option>Unid</option>
        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-3 ">
    
     <!--Fork: Number of Tines-->
     <div class="col">
        <label for="fork_tines" class="form-label">Fork: Number of Tines</label>
        <select class="form-select " id="fork_tines"  name="fork_tines" required>
            <option disabled selected value> -- select an option -- </option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>Indeterminate</option>
            <option>Not Applicable</option>
        </select>
            <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Part-->
    <div class="col">
        <label for="part" class="form-label"> Part</label>
        <select class="form-select " id="part"  name="part" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Blade</option>
            <option>Bowl</option>
            <option>Handle</option>
            <option>Stem</option>
            <option>Tang</option>
            <option>Tine</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->


    <!--Marks?-->
    <div class="col">
        <label for="mark" class="form-label">Marks?</label>
        <select class="form-select " id="mark"  name="mark">
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/A (Not Applicable)</option>
            <option>N/R (Not Recorded)</option>
            <option>Unid</option>
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
        <input type="text" class="form-control " id="conservation"  name="conservation" placeholder="(Optional)">
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


</div><!--END ROW-->


