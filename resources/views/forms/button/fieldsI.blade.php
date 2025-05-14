<!--FIELDS I ROW IMAGE-->
<div class="row">

    <div class="col-5">
        <!--Material-->
        <div class="col">
            <label for="material" class="form-label">Buckle Type</label>
            <select class="form-control " id="material"  name="material" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Bone</option>
                <option>Ceramic</option>
                <option>Copper Alloy</option>
                <option>Glass</option>
                <option>Iron</option>
                <option>Ivory</option>
                <option>Missing</option>
                <option>Not Applicable</option>
                <option>Paste</option>
                <option>Pewter</option>
                <option>Porcelain</option>
                <option>Shell</option>
                <option>Silver</option>
                <option>Synthetic/Modern</option>
                <option>Tombac</option>
                <option>Unidentifiable</option>
                <option>Wood</option>
            </select>    
            <div class="invalid-feedback">
                 Required field.
            </div>
        </div><!--END COL-->

        <!-- Button Type-->
        <div class="col">
            <label for="button_type" class="form-label">Button Type</label>
            <select class="form-control " id="button_type"  name="button_type" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>1 Piece</option>
                <option>1 Piece domed</option>
                <option>1 Piece semi-domed</option>
                <option>2 Piece</option>
                <option>2 Piece domed</option>
                <option>2 Piece semi-domed</option>
                <option>3 Piece</option>
                <option>3 Piece semi-domed</option>
                <option>Blank/mold</option>
                <option>Collar Button</option>
                <option>FD concave back (Flat Disc concave back)</option>
                <option>FD convex back (Flat Disc convex back)</option>
                <option>Flat Disc</option>
                <option>Missing</option>
                <option>Ring</option>
                <option>Unidentifiable</option>
            </select>
            <div class="invalid-feedback">
                    Required field. 
            </div>
        </div><!--END COL-->
    

        <!--Button Shape-->
        <div class="col">
            <label for="button_shape" class="form-label">Button Shape</label>
            <select class="form-control " id="button_shape"  name="button_shape" required>
                <option disabled selected value> -- select an option -- </option>
                <option>Barrel</option>
                <option>Missing</option>
                <option>Not Recorded</option>
                <option>Octagonal</option>
                <option>Oval</option>
                <option>Rectangular</option>
                <option>Round</option>
                <option>Square</option>
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
                <option selected disabled value=""> -- select an option -- </option>
                <option>Cast</option>
                <option>Cut/Carved</option>
                <option>Drawn</option>
                <option>Hollow Cast</option>
                <option>Molded</option>
                <option>Not Applicable</option>
                <option>Prosser Molded</option>
                <option>Spun Back, cast</option>
                <option>Stamped</option>
                <option>Unidentifiable</option>
                <option>Wound</option>
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
    <!-- Back Stamp-->
    <div class="col">
        <label for="back_stamp" class="form-label">Back Stamp</label>
        <input type="text" class="form-control " id="back_stamp"  name="back_stamp">
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--Eye-->
    <div class="col">
        <label for="eye" class="form-label">Eye</label>
        <select class="form-control " id="eye"  name="eye" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Five Holes</option>
            <option>Four Holes</option>
            <option>No Holes</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>One Hole</option>
            <option>Three Holes</option>
            <option>Two Holes</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->


    <!--Button Color-->
    <div class="col-2">
        <label for="button_color" class="form-label">Button Color
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful field explainer here?">
                <i class="fa-solid fa-circle-question"></i></button>
        </label>
        <input type="text" class="form-control " id="button_color"  name="button_color" required>
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
        <select class="form-control " id="post_manu_mod"  name="post_manu_mod" required>
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

    <!--Metal Color-->
    <div class="col">
        <label for="metal_color" class="form-label">Metal Color</label>
        <select class="form-control " id="metal_color"  name="metal_color" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Not Recorded</option>
            <option>Not Applicable</option>
            <option>Unidentifiable</option>
            <option>White</option>
            <option>Yellow</option>

        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->
    

    
    <!-- Back Stamp-->
    <div class="col-2">
        <label for="button_weight" class="form-label">Button Weight</label>
        <input type="number" class="form-control " id="button_weight" min="0" step=".01"  name="button_weight">
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
        <select class="form-control " id="decorative_technique"  name="decorative_technique" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Added Glass</option>
            <option>Carved</option>
            <option>Cast</option>
            <option>Engraved</option>
            <option>Facetted</option>
            <option>Jewel Setting</option>
            <option>Molded</option>
            <option>Painted</option>
            <option>Plated</option>
            <option>Stamped</option>
            <option>Transfer Printed</option>
            <option>Unidentifiable</option>
            <option>Wheel Engraved</option>
        </select>
            <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


    <!--Decorative Motif-->
    <div class="col">
        <label for="decorative_motif" class="form-label">Decorative Motif</label>
        <input type="text" class="form-control " id="decorative_motif"  name="decorative_motif">
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--Decoration Color-->
     <div class="col-2">
        <label for="decorative_color" class="form-label">Decoration Color</label>
        <input type="text" class="form-control " id="decorative_color"  name="decorative_color" required>
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
        <input type="text" class="form-control " id="conservation"  name="conservation" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Jewel/Inlay Material-->
    <div class="col">
        <label for="inlay_material" class="form-label">Jewel/Inlay Material</label>
        <select class="form-control " id="inlay_material"  name="inlay_material" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Glass</option>
            <option>Gold</option>
            <option>Missing</option>
            <option>Not Applicable</option>
            <option>Paste</option>
            <option>Semi-Precious</option>
            <option>Shell</option>
            <option>Silver</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    

    <!--Burned?-->
    <div class="col-2">
        <label for="burned" class="form-label">Burned?</label>
        <select class="form-control " id="burned"  name="burned" required>
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

<hr>


<!--FIELDS I ROW -->
<div class="row">
    <!-- Shank Style-->
    <div class="col">
        <label for="shank_style" class="form-label">Shank Style</label>
        <select class="form-control " id="shank_style"  name="shank_style" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Alpha</option>
            <option>Bar Type</option>
            <option>Cast Eye</option>
            <option>Cone with Wire Eye</option>
            <option>Drilled Eye</option>
            <option>Drilled Eye swagged-in</option>
            <option>Embedded Wire</option>
            <option>Missing</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Omega</option>
            <option>Sanders Type/Loose Eye</option>
            <option>Shank Cast in Boss</option>
            <option>Unidentifiable</option>
            <option>Wire Eye</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


      <!-- Shank Material-->
    <div class="col">
        <label for="shank_material" class="form-label">Shank Material</label>
        <select class="form-control " id="shank_material"  name="shank_material" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Bone</option>
            <option>Copper Alloy</option>
            <option>Glass</option>
            <option>Gold</option>
            <option>Iron</option>
            <option>Lead Alloy</option>
            <option>Missing</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Pewter</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!-- Shank Condition-->
    <div class="col">
        <label for="shank_condition" class="form-label">Shank Condition</label>
        <select class="form-control " id="shank_condition"  name="shank_condition" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Bent</option>
            <option>Broken</option>
            <option>Corroded</option>
            <option>Missing</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Straight</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->





</div><!--END ROW-->

<!--FIELDS I ROW -->
<div class="row">
    <!-- Face Material-->
    <div class="col">
        <label for="face_material" class="form-label">Face Material</label>
        <select class="form-control " id="face_material"  name="face_material" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Bone</option>
            <option>Ceramic</option>
            <option>Copper Alloy</option>
            <option>Glass</option>
            <option>Iron</option>
            <option>Ivory</option>
            <option>Missing</option>
            <option>Not Applicable</option>
            <option>Paste</option>
            <option>Pewter</option>
            <option>Porcelain</option>
            <option>Shell</option>
            <option>Silver</option>
            <option>Synthetic/Modern</option>
            <option>Tombac</option>
            <option>Unidentifiable</option>
            <option>Wood</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


    <!-- Face Manufacturing Technique-->
    <div class="col">
        <label for="face_manu_tech" class="form-label">Face Manufacturing Technique</label>
        <select class="form-control " id="face_manu_tech"  name="face_manu_tech" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Cast</option>
            <option>Cut/Carved</option>
            <option>Drawn</option>
            <option>Hollow Cast</option>
            <option>Molded</option>
            <option>Not Applicable</option>
            <option>Prosser Molded</option>
            <option>Spun Back, cast</option>
            <option>Stamped</option>
            <option>Unidentifiable</option>
            <option>Wound</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--  Button Join Method-->
    <div class="col">
        <label for="button_join" class="form-label">Button Join Method</label>
        <input type="text" class="form-control " id="button_join"  name="button_join" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->





</div><!--END ROW-->
