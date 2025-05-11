<!--FIELDS I ROW IMAGE-->
<div class="row">

    <div class="col-5">
        <!--Non-Plastic Paste Inclusions-->
        <div class="col">
            <label for="non_plastic_inclu" class="form-label">Non-Plastic Paste Inclusions</label>
            <select class="form-control " id="non_plastic_inclu"  name="non_plastic_inclu" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Black Crypto-crystalline</option>
                <option>Grog</option>
                <option>Hematite</option>
                <option>Limestone</option>
                <option>Mica</option>
                <option>None</option>
                <option>Quartz clear</option>
                <option>Rock other</option>
                <option>Rock white</option>
                <option>Shell</option>
                <option>Unid red</option>
                <option>Voids fiber</option>
                <option>Voids shell</option>
                <option>Voids unid</option>
            </select>    
            <div class="invalid-feedback">
                Must select a manufacturing technique
            </div>
        </div><!--END COL-->

        <!--MATERIAL-->
        <div class="col">
            <label for="material" class="form-label">Material</label>
            <select class="form-control " id="material"  name="material" required>
                <option disabled selected value> -- select an option -- </option>
                <option>Earthenware imported</option>
                <option>Earthenware locally-made</option>
                <option>Ivory</option>
                <option>Metal</option>
                <option>Plastic</option>
                <option>Porcelain</option>
                <option>Steatite</option>
                <option>Stone</option>
                <option>Stoneware</option>
                <option>Unidentifiable</option>

            </select>
            <div class="invalid-feedback">
            Must select ceramic material. 
            </div>
        </div><!--END COL-->

        <!--Manufacturing Technique-->
        <div class="col">
            <label for="manufacturing_technique" class="form-label">Manufacturing Technique</label>
            <select class="form-select" id="manufacturing_technique" name="manufacturing_technique" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Carved</option>
                <option>Handmade</option>
                <option>Molded</option>
                <option>Unidentifiable</option>

            </select>
            <div class="invalid-feedback">
            Must select a bead structure.
            </div>
        </div><!--END COL-->

        <!--Manufacture Location-->
        <div class="col">
            <label for="manufact_location" class="form-label">Manufacture Location</label>
            <input type="text" class="form-control " id="manufact_location"  name="manufact_location" required>
            <div class="invalid-feedback">
                Must select ceramic bead form. 
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
                Must make a selection. 
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

<!--FIELDS I  ROW -->
<div class="row mt-4">
    <!--Bowl Base Type-->
    <div class="col">
        <label for="bowl_base_type" class="form-label">Bowl Base Type</label>
        <select class="form-control " id="bowl_base_type"  name="bowl_base_type" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Flat</option>
            <option>Heel</option>
            <option>Heel-less</option>
            <option>Missing Information</option>
            <option>Not Applicable</option>
            <option>Spur</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Must select bead shape. 
        </div>
    </div><!--END COL-->

    <!--Mouthpiece Form-->
    <div class="col">
        <label for="mouthpiece_form" class="form-label">Mouthpiece Form</label>
        <select class="form-control " id="mouthpiece_form"  name="mouthpiece_form" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Cut</option>
            <option>Diamond Nipple</option>
            <option>Diamond Shape</option>
            <option>Flattened Oval</option>
            <option>Nipple</option>
            <option>Not Applicable</option>
            <option>Reed/Stub Stem</option>
            <option>Rounded</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select make a selection complex shape.
        </div>
    </div><!--END COL-->


    <!--PASTE COLOR-->
    <div class="col-2">
        <label for="paste_color" class="form-label">Paste Color
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful field explainer here?">
                <i class="fa-solid fa-circle-question"></i></button>
        </label>
        <input type="text" class="form-control " id="paste_color"  name="paste_color" required>
        <div class="invalid-feedback">
            Must select an interior exterior
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
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Unid</option>

        </select>
        <div class="invalid-feedback">
            Must select a heat treatment. 
        </div>
    </div><!--END COL-->

    <!--gLAZE TYPE-->
    <div class="col">
        <label for="glaze_type" class="form-label">Glaze Type</label>
        <select class="form-control " id="glaze_type"  name="glaze_type" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Lead Glaze</option>
            <option>No Glaze</option>
            <option>Non-Lead Glaze</option>
            <option>Salt Glaze</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select ceramic bead form. 
        </div>
    </div><!--END COL-->
    

    <!--Glaze Color-->
    <div class="col-2">
        <label for="glaze_color" class="form-label">Glaze Color</label>
        <input type="number" class="form-control " id="glaze_color"  name="glaze_color" min="0"required>
        <div class="invalid-feedback">
            Must input number of facets. 
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-3 ">
    
     <!--Maker-->
     <div class="col">
        <label for="maker" class="form-label">Maker</label>
        <input type="text" class="form-control " id="maker"  name="maker" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    <!--MENDED-->
    <div class="col-2">
        <label for="mended" class="form-label">Mended?</label>
        <select class="form-control " id="mended"  name="mended" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Unid</option>

        </select>
        <div class="invalid-feedback">
            Must select mended option.
        </div>
    </div><!--END COL-->
    
    <!--Motif Location-->
    <div class="col">
        <label for="motif_location" class="form-label">Motif Location</label>
        <select class="form-control " id="motif_location"  name="motif_location">
            <option disabled selected value> -- select an option -- </option>
            <option>BA: On the bowl facing away from the smoker</option>
            <option>BB: Beneath the Bowl, when pipe has neither heel nor spur</option>
            <option>BC: On Bowl, circumference of bowl rim.</option>
            <option>BF: On Bowl, facing smoker.</option>
            <option>BL: On Bowl, on left hand side as smoked</option>
            <option>BR: On Bowl, on right hand side as smoked</option>
            <option>H: On Base of Heel</option>
            <option>RS: Roll Stamp Stem, a continuous band or zone around the stem. This may be plan or decorated but does not include milled decoration.</option>
            <option>SH: On Sides of Heel</option>
            <option>SL: On Top of Stem, reading along length of the stem</option>
            <option>SM: Multiple Individual Stamps, tight around the stem as a band or pattern</option>
            <option>SP: On Base of Spur</option>
            <option>SS: On Sides of Spur</option>
            <option>ST: Stem twist, a specific form of roll stamp forming a spiral of shallow grooves around the stem.</option>
            <option>SX: On Top of the Stem, reading across the stem (text/pattern encircling the stem)</option>
            <option>SB: Decoration located at the juncture of the bowl and stem, most often a continuous roulette band around the stem directly at the stem’s juncture with the bowl.</option>
        </select>
    </div><!--END COL-->
    

    <!--Decorative Motif-->
    <div class="col">
        <label for="decorative_motif" class="form-label">Decorative Motif</label>
        <select class="form-control " id="decorative_motif"  name="decorative_motif" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Agate Paste</option>
            <option>Anthropomorphic</option>
            <option>Botanical</option>
            <option>Coat of Arms</option>
            <option>Geometric</option>
            <option>Other, pictorial</option>
            <option>Unidentifiable</option>
            <option>Zoomorphic</option>
        </select>
        <div class="invalid-feedback">
            Must select Post-Manufacturing Modification. 
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
            Must select
        </div>
    </div><!--END COL-->


    <!--Conserved?-->
    <div class="col-2">
        <label for="conserved" class="form-label">Conserved?</label>
        <select class="form-control " id="conserved"  name="conserved" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Yes</option>
            <option>No</option>
            <option>N/A (Not Applicable)</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
            Must select burn condition. 
        </div>
    </div><!--END COL-->

    <!--Motif Manufacturing Method-->
    <div class="col">
        <label for="motif_manu_method" class="form-label">Motif Manufacturing Method</label>
        <select class="form-control " id="motif_manu_method"  name="motif_manu_method" required>
        <option disabled selected value> -- select an option -- </option>
        <option>Agatized</option>
        <option>Carved</option>
        <option>Incised</option>
        <option>Molded</option>
        <option>Punctate</option>
        <option>Roulette</option>
        <option>Slipped/Painted</option>
        <option>Stamped</option>
        </select>
        <div class="invalid-feedback">
            Must enter Weather/erosion.
        </div>
    </div><!--END COL-->

    <!--Mark Type-->
    <div class="col">
        <label for="mark_type" class="form-label">Mark Type</label>
        <select class="form-control " id="mark_type"  name="mark_type" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Incised</option>
            <option>Ink/Rubber Stamp</option>
            <option>Molded</option>
            <option>Stamped</option>
            <option>Transfer Printed</option>
        </select>
        <div class="invalid-feedback">
            Must enter an applied color.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I ROW -->
<div class="row">
    
    <!--Location of Text-->
    <div class="col">
        <label for="text_location" class="form-label">Location of Text</label>
        <select class="form-control " id="text_location"  name="text_location" required>
            <option disabled selected value> -- select an option -- </option>
             <option>BA: On the bowl facing away from the smoker</option>
            <option>BB: Beneath the Bowl, when pipe has neither heel nor spur</option>
            <option>BC: On Bowl, circumference of bowl rim.</option>
            <option>BF: On Bowl, facing smoker.</option>
            <option>BL: On Bowl, on left hand side as smoked</option>
            <option>BR: On Bowl, on right hand side as smoked</option>
            <option>H: On Base of Heel</option>
            <option>RS: Roll Stamp Stem, a continuous band or zone around the stem. This may be plain or decorated but does not include milled decoration.</option>
            <option>SH: On Sides of Heel</option>
            <option>SL: On Top of Stem, reading along length of the stem</option>
            <option>SM: Multiple Individual Stamps, tight around the stem as a band or pattern</option>
            <option>SP: On Base of Spur</option>
            <option>SS: On Sides of Spur</option>
            <option>ST: Stem twist, a specific form of roll stamp forming a spiral of shallow grooves around the ste.</option>
            <option>SX: On Top of the Stem, reading across the stem (text/pattern encircling the stem)</option>
            <option>SB: Decoration located at the juncture of the bowl and stem, most often a continuous roulette band around the stem directly at the stem’s juncture with the bowl.</option>
        </select>
        <div class="invalid-feedback">
            Must select a bead decoration.
        </div>
    </div><!--END COL-->

    <!--Bowl Volume-->
        <div class="col-2">
        <label for="bowl_volume" class="form-label">Bowl Volume</label>
        <input type="number" class="form-control " id="bowl_volume"  name="bowl_volume"  min="0"  step="0.01" required>
        <div class="invalid-feedback">
            Must fill
        </div>
    </div><!--END COL-->


    <!-- Text Frame Motif -->
    <div class="col">
        <label for="text_frame_motif" class="form-label"> Text Frame Motif</label>
        <select class="form-control " id="text_frame_motif"  name="text_frame_motif" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Circular or sub-circular</option>
            <option>Crescent</option>
            <option>Four Lobes</option>
            <option>Heart-shaped</option>
            <option>Irregular Border</option>
            <option>Octagonal</option>
            <option>Rectangular</option>
            <option>Shield</option>
            <option>Square</option>
            <option>Un-Bordered lettering, any arrangement</option>
        </select>
        <div class="invalid-feedback">
            Must select enter casing color.
        </div>
    </div><!--END COL-->

    <!--Slogan/Other-->
    <div class="col">
        <label for="slogan" class="form-label">Slogan/Other</label>
        <input type="text" class="form-control " id="slogan"  name="slogan">

    </div><!--END COL-->
    

</div><!--END ROW-->


<!--FIELDS I ROW -->
<div class="row">
    <!--Decoration Description -->
    <div class="col">
        <label for="mark_notes" class="form-label">Mark Notes
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful explainer">
                <i class="fa-solid fa-circle-question"></i>
          </button>
        </label>
        <textarea class="form-control " id="mark_notes"  name="mark_notes" placeholder="(Optional)" rows="3"></textarea>

    </div><!--END COL-->





</div><!--END ROW-->
