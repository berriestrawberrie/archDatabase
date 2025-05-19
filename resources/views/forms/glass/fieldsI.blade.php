<!--FIELDS I ROW IMAGE-->
<div class="row">

    <div class="col-5">
        <!--Material-->
        <div class="col">
            <label for="material" class="form-label">Buckle Type</label>
            <select class="form-control " id="material"  name="material" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Lead Glass</option>
                <option>Non-Lead Glass</option>
                <option>Not Recorded</option>
                <option>Unidentifiable</option>
            </select>    
            <div class="invalid-feedback">
                 Required field.
            </div>
        </div><!--END COL-->

        <!-- Glass Color-->
        <div class="col">
            <label for="glass_color" class="form-label">Glass Color</label>
            <select class="form-control " id="glass_color"  name="glass_color" required>
                <option selected disabled value=""> -- select an option -- </option>
                <option>Amber</option>
                <option>Amethyst</option>
                <option>Aqua</option>
                <option>Blue</option>
                <option>Blue/Green (18th century)</option>
                <option>Brown</option>
                <option>Colorless</option>
                <option>Gray/Smoky</option>
                <option>Green</option>
                <option>Light Blue</option>
                <option>Light Green</option>
                <option>Modern Green</option>
                <option>Not Recorded</option>
                <option>Orange</option>
                <option>Pink</option>
                <option>Purple</option>
                <option>Red</option>
                <option>Unidentifiable</option>
                <option>White</option>
                <option>Yellow</option>
            </select>
            <div class="invalid-feedback">
                    Required field. 
            </div>
        </div><!--END COL-->
    

        <!--Vessel Category-->
        <div class="col">
            <label for="vessel_category" class="form-label">Vessel Category</label>
            <select class="form-control " id="vessel_category"  name="vessel_category" required>
                <option disabled selected value> -- select an option -- </option>
                  <option>Flat</option>
                <option>Hollow</option>
                <option>Not Recorded</option>
                <option>Unidentifiable</option>
            </select>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Form-->
        <div class="col">
            <label for="form" class="form-label">Form</label>
            <select class="form-select" id="form" name="form" required>
                <option selected disabled value=""> -- select an option -- </option>
                  <option>Bell Jar</option>
                <option>Bottle Seal</option>
                <option>Bottle, Beer</option>
                <option>Bottle, Case</option>
                <option>Bottle, Food</option>
                <option>Bottle, Ink</option>
                <option>Bottle, Liquor</option>
                <option>Bottle, Milk</option>
                <option>Bottle, Mineral/Soda</option>
                <option>Bottle, Perfume</option>
                <option>Bottle, Snuff</option>
                <option>Bottle, Unidentifiable</option>
                <option>Bottle, Wine Style</option>
                <option>Bowl</option>
                <option>Container, unidentifiable</option>
                <option>Decanter</option>
                <option>Drinking Glass, unid.</option>
                <option>Flask</option>
                <option>Inkwell</option>
                <option>Jar</option>
                <option>Jelly Glass</option>
                <option>Lid Liner</option>
                <option>Not Recorded</option>
                <option>Pharmaceutical Vial/Bottle</option>
                <option>Salver</option>
                <option>Seal, bottle</option>
                <option>Stemware</option>
                <option>Stopper</option>
                <option>Tableware, unidentifiable</option>
                <option>Tumbler</option>
                <option>Unidentifiable</option>
                <option>Vase</option>
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
        <select class="form-control " id="manufacturing_technique"  name="manufacturing_technique">
            <option selected disabled value=""> -- select an option -- </option>
            <option>Free Blown</option>
            <option>Machine Made</option>
            <option>Mold Blown</option>
            <option>Mouth Blown</option>
            <option>Not Recorded</option>
            <option>Stamped</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--Mold Type-->
    <div class="col">
        <label for="mold_type" class="form-label">Mold Type</label>
        <select class="form-control " id="mold_type"  name="mold_type" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Contact Mold</option>
            <option>Missing Information</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Optic Mold</option>
            <option>Pattern Mold</option>
            <option>Press Mold</option>
            <option>Unidentifiable</option>
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
        <select class="form-control " id="mended"  name="mended" required>
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

    <!--Patination?-->
    <div class="col">
        <label for="metal_color" class="form-label">Patination</label>
        <select class="form-control " id="metal_color"  name="metal_color" required>
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
    

    
    <!-- Solarized-->
    <div class="col">
        <label for="solarized" class="form-label">Solarized</label>
        <select class="form-control " id="solarized" name="solarized">
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
<div class="row mt-3 ">
    
     <!--Weathered/Eroded?-->
     <div class="col">
        <label for="weather_eroded" class="form-label">Weathered/Eroded</label>
        <select class="form-control " id="weather_eroded"  name="weather_eroded" required>
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

    <!--Burned?-->
    <div class="col">
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


    <!--Pontil Mark-->
    <div class="col">
        <label for="pontil_mark" class="form-label">Pontil Mark</label>
        <select class="form-control " id="pontil_mark"  name="pontil_mark">
            <option disabled selected value> -- select an option -- </option>
            <option>Bare Iron</option>
            <option>Blow Pipe</option>
            <option>Empontilled improved and ground</option>
            <option>Empontilled type unid</option>
            <option>Empontilled type unfinished</option>
            <option>Glass-Tipped</option>
            <option>Missing Information</option>
            <option>Non-empontilled</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Quatrefoil</option>
            <option>Sand Glass-Tipped</option>
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
        <input type="text" class="form-control " id="conservation"  name="conservation" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Decorative Technique-->
    <div class="col">
        <label for="decorative_technique" class="form-label">Decorative Technique</label>
        <select class="form-control " id="decorative_technique"  name="decorative_technique" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Acid Etched</option>
            <option>Air Bubbles</option>
            <option>Air Twist</option>
            <option>Applied Color Label</option>
            <option>Applied Glass</option>
            <option>Casing</option>
            <option>Copper Wheel Engraving</option>
            <option>Cut</option>
            <option>Diamond Point Engraving</option>
            <option>Enamel Twist</option>
            <option>Enameled</option>
            <option>Engraved</option>
            <option>Flashing</option>
            <option>Gilded</option>
            <option>Ground</option>
            <option>Mixed Twist</option>
            <option>Molded</option>
            <option>Painted</option>
            <option>Sand Blasted</option>
            <option>Silveria</option>
            <option>Staining</option>
            <option>Stamped</option>
            <option>Tooled</option>
            <option>Undecorated</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    
    <!--Stylistic Element-->
    <div class="col">
        <label for="stylistic_element" class="form-label">Stylistic Element</label>
        <select class="form-control " id="stylistic_element"  name="stylistic_element" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Band</option>
            <option>Botanical</option>
            <option>Cartouche</option>
            <option>Cordoned</option>
            <option>Cross-hatching</option>
            <option>Double Wavy Band</option>
            <option>Diamonds</option>
            <option>Dogtooth Band</option>
            <option>Dots</option>
            <option>Facets</option>
            <option>Fan</option>
            <option>Flutes</option>
            <option>Hobnails</option>
            <option>Lettering</option>
            <option>Mitre</option>
            <option>Notches</option>
            <option>Other see notes</option>
            <option>Panels</option>
            <option>Prunt, raspberry</option>
            <option>Ribs</option>
            <option>Scallop Band</option>
            <option>Scalloped/Sawt Edge</option>
            <option>Solid</option>
            <option>Star</option>
            <option>Stippled</option>
            <option>Sun/Starburst</option>
            <option>Swag</option>
            <option>Teardrop</option>
            <option>Twisted</option>
            <option>Unidentifiable</option>
            <option>Wavy Band</option>
            <option>Wrythen</option>
        </select>
        <div class="invalid-feedback">
            Required field. 
        </div>
    </div><!--END COL-->


</div><!--END ROW-->

<hr>


<!--FIELDS I ROW -->
<div class="row">
    <!--  Bottle Element-->
    <div class="col">
        <label for="bottle_element" class="form-label"> Bottle Element</label>
        <select class="form-control " id="bottle_element"  name="bottle_element" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Base</option>
            <option>Body horizontal</option>
            <option>Finish</option>
            <option>Lip</option>
            <option>Neck</option>
            <option>String Rim</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


    <!-- Element Shape-->
    <div class="col">
        <label for="element_shape" class="form-label">Element Shape</label>
        <select class="form-control " id="element_shape"  name="element_shape" required>
            <option disabled selected value> -- select an option -- </option>
            <option>1-Part Finish</option>
            <option>2-Part Finish</option>
            <option>3-Part Finish</option>
            <option>Bulged (Neck)</option>
            <option>Champagne (Finish)</option>
            <option>Circular (Body Horiz.)</option>
            <option>Conical (Base)</option>
            <option>Convex (Base)</option>
            <option>Cylindrical (Neck)</option>
            <option>Domed (Base)</option>
            <option>Down-Sloped (Lip String Rim)</option>
            <option>Flanged (Lip)</option>
            <option>Flat (Base)</option>
            <option>Flat Side (Lip String Rim)</option>
            <option>Flat Top (Lip)</option>
            <option>Four Point (Base)</option>
            <option>Hexagonal (Body Horiz.)</option>
            <option>Irregular (Lip String Rim)</option>
            <option>Non-Existent (Neck)</option>
            <option>Not Recorded</option>
            <option>Octagonal</option>
            <option>Ovoid (Body Horizontal)</option>
            <option>Rectangular (Body Horiz.)</option>
            <option>Rocker (Base)</option>
            <option>Rounded (Lip String Rim)</option>
            <option>Rudimentary</option>
            <option>Sloped Top (Lip)</option>
            <option>Tapered (Neck)</option>
            <option>Tapered out/Down (LipNeck)</option>
            <option>Unidentifiable</option>
            <option>Up-Sloped (String Rim)</option>
            <option>V-Shaped (Lip String Rim)</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!-- Element Manufacturing Technique-->
    <div class="col">
        <label for="element_manu_fact" class="form-label">Element Manufacturing Technique</label>
        <select class="form-control " id="element_manu_fact"  name="element_manu_fact" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Added Glass (non-tooled)</option>
            <option>Cracked-Off /Burst-Off</option>
            <option>Dip Mold</option>
            <option>Finishing Tool</option>
            <option>Free Blown</option>
            <option>Manipulated</option>
            <option>Molded, unid. mold type</option>
            <option>Mouth Blown</option>
            <option>Not Recorded</option>
            <option>Turn Paste</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->





</div><!--END ROW-->

<!--FIELDS I ROW -->
<div class="row">
    <!-- Element Treatment-->
    <div class="col">
        <label for="element_treatment" class="form-label">Element Treatment</label>
        <select class="form-control " id="element_treatment"  name="element_treatment" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Heat Treated</option>
            <option>Mamelon</option>
            <option>Not Applicable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


    <!--  Stemware Body Shape-->
    <div class="col">
        <label for="stemware_body" class="form-label"> Stemware Body Shape</label>
        <select class="form-control " id="stemware_body"  name="stemware_body" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Bell</option>
            <option>Bucket</option>
            <option>Conical</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Trumpet</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Stemware Foot Shape-->
    <div class="col">
        <label for="stemware_foot" class="form-label">Stemware Foot Shape</label>
        <select class="form-control " id="stemware_foot"  name="stemware_foot" required>
            <option disabled selected value> -- select an option -- </option>
            <option>Conical folded</option>
            <option>Conical plain</option>
            <option>Domed and Folded</option>
            <option>Firing</option>
            <option>Folded unid</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->



</div><!--END ROW-->
