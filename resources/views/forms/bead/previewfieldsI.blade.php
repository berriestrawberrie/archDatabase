<!--FIELDS I ROW IMAGE-->
<div class="row">

    <div class="col-5">
        <!--MANUFACTURING-->
        <div class="col">
            <label for="manufacturing_technique" class="form-label">Manufacturing Technique</label>
            <select class="form-select" id="manufacturing_technique"  name="manufacturing_technique" required>
                <option value="{{$artifact[0]["manufacturing_technique"]}}">{{$artifact[0]["manufacturing_technique"]}}</option>
                <option>Blown</option>
                <option>Cast</option>
                <option>Cut/Carved</option>
                <option>Drawn</option>
                <option>Mold Pressed</option>
                <option>Molded, Prosser</option>
                <option>Not Recorded</option>
                <option>Unidentifiable</option>
                <option>Wound</option>
            </select>
            <div class="invalid-feedback">
               Required field.
            </div>
        </div><!--END COL-->

        <!--MATERIAL-->
        <div class="col">
            <label for="material" class="form-label">Material</label>
            <select class="form-select" id="material"  name="material" required>
                <option value="{{$artifact[0]["material"]}}">{{$artifact[0]["material"]}}</option>
                <option>Amber</option>
                <option>Bone</option>
                <option>Carnelian</option>
                <option>Clay</option>
                <option>Copper/Copper Alloy</option>
                <option>Glass</option>
                <option>Gold</option>
                <option>Leather</option>
                <option>Not Recorded</option>
                <option>Plastic</option>
                <option>Porcelain</option>
                <option>Shell</option>
                <option>Silver</option>
                <option>Stone, unidentifiable</option>
                <option>Unidentifiable</option>

            </select>
            <div class="invalid-feedback">
             Required field.
            </div>
        </div><!--END COL-->

        <!--BEAD STRUCTURE-->
        <div class="col">
            <label for="bead_struct" class="form-label">Bead Structure</label>
            <select class="form-select" id="bead_struct" name="bead_struct" required>
                <option value="{{$artifact[0]["bead_struct"]}}"> {{$artifact[0]["bead_struct"]}}</option>
                <option>Compound</option>
                <option>Not Recorded</option>
                <option>Simple</option>
                <option>Unidentifiable</option>

            </select>
            <div class="invalid-feedback">
             Required field.
            </div>
        </div><!--END COL-->

        <!--BEAD FORM-->
        <div class="col">
            <label for="bead_form" class="form-label">Bead Form</label>
            <select class="form-select" id="bead_form"  name="bead_form" required>
                <option value="{{$artifact[0]["bead_form"]}}">{{$artifact[0]["bead_form"]}}</option>
                <option>Straight Curvilinear</option>
                <option>Straight Polyhedral</option>
                <option>Twisted Curvilinear</option>
                <option>Twisted Polyhedral</option>
                <option>Unidentified</option>

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
            <img  id="file-ip-1-preview" src="{{asset('uploads/beads/'.$artifact[0]["photo"])}}"style="width: 200px; ">
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
    <!--Bead Shape-->
    <div class="col">
        <label for="bead_shape" class="form-label">Bead Shape</label>
        <select class="form-select" id="bead_shape"  name="bead_shape" required>
            <option value="{{$artifact[0]["bead_shape"]}}"> {{$artifact[0]["bead_shape"]}}</option>
            <option>Barrel</option>
            <option>Biconical</option>
            <option>Collared Spheroid</option>
            <option>Disc</option>
            <option>Faceted</option>
            <option>Not Recorded</option>
            <option>Oval</option>
            <option>Spherical</option>
            <option>Square</option>
            <option>Sub-Spherical</option>
            <option>Triangular</option>
            <option>Tubular</option>
            <option>Unidentifiable</option>
            <option>Waisted</option>
        </select>
        <div class="invalid-feedback">
        Required field.
        </div>
    </div><!--END COL-->

    <!--Complex Shape-->
    <div class="col">
        <label for="complex_shape" class="form-label">Complex Shape</label>
        <select class="form-select" id="complex_shape"  name="complex_shape" required>
            <option value="{{$artifact[0]["complex_shape"]}}">{{$artifact[0]["complex_shape"]}}</option>
            <option>Alternating Twist</option>
            <option>Cornerless Heptagonal</option>
            <option>Cornerless Hexagonal</option>
            <option>Cornerless Octagonal</option>
            <option>Cornerless Pentagonal</option>
            <option>Heptagonal</option>
            <option>Hexagonal</option>
            <option>Not Applicable</option>
            <option>Octagonal</option>
            <option>Pentagonal</option>
            <option>Quadrangular</option>
            <option>Raspberry</option>
            <option>Scarab</option>
            <option>Square</option>
            <option>Teardrop, flat</option>
            <option>Teardrop, inverted</option>
            <option>Triangular</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


    <!--BEAD COLOR-->
    <div class="col-2">
        <label for="bead_color" class="form-label">Bead Color
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful field explainer here?">
                <i class="fa-solid fa-circle-question"></i></button>
        </label>
        <input type="text" class="form-control " id="bead_color"  name="bead_color"  value="{{$artifact[0]["bead_color"]}}"required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->


</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-2">

    <!--Heat Treated-->
    <div class="col">
        <label for="heat_treated" class="form-label">Heat Treated</label>
        <select class="form-select" id="heat_treated"  name="heat_treated" required>
            <option value="{{$artifact[0]["heat_treated"]}}">{{$artifact[0]["heat_treated"]}}</option>
            <option>Yes</option>
            <option>No</option>
            <option>N/A (Not Applicable)</option>
            <option>N/R (Not Recorded)</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--END TREATMENT-->
    <div class="col">
        <label for="end_treatment" class="form-label">End Treatment</label>
        <select class="form-select" id="end_treatment"  name="end_treatment" required>
            <option value="{{$artifact[0]["end_treatment"]}}">{{$artifact[0]["end_treatment"]}}</option>
            <option>Cut/Sawn/Ground Flat</option>
            <option>Not Recorded</option>
            <option>Rounded</option>
            <option>Unfinished</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->


    <!--Number FAcets-->
    <div class="col-2">
        <label for="number_facets" class="form-label">Number of Facets</label>
        <input type="number" class="form-control " id="number_facets" value="{{$artifact[0]["number_facets"]}}"  name="number_facets" min="0" required>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I  ROW -->
<div class="row mt-3 ">
    
     <!--CERAMIC COMPLETENESS-->
     <div class="col">
        <label for="diaphaneity" class="form-label">Diaphaneity</label>
        <select class="form-select" id="diaphaneity"  name="diaphaneity" required>
            <option value="{{$artifact[0]["diaphaneity"]}}">{{$artifact[0]["diaphaneity"]}}</option>
            <option>Not Applicable</option>
            <option>Opaque</option>
            <option>Translucent</option>
            <option>Transparent</option>
            <option>Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--MENDED-->
    <div class="col-2">
        <label for="mended" class="form-label">Mended?</label>
        <select class="form-select" id="mended"  name="mended" required onchange="getMended()">
            <option value="{{$artifact[0]["mended"]}}">{{$artifact[0]["mended"]}}</option>
            <option  value="yes">yes</option>
            <option  value="no">no</option>
            <option  value="not recorded">not recorded</option>

        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Post-Manufacturing Modification-->
    <div class="col">
        <label for="post_man_mod" class="form-label">Post-Manufacturing Modification</label>
        <select class="form-select" id="post_man_mod"  name="post_man_mod" required>
            <option value="{{$artifact[0]["post_man_mod"]}}">{{$artifact[0]["post_man_mod"]}}</option>
            <option  value="yes">yes</option>
            <option  value="no">no</option>
            <option  value="not recorded">not recorded</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--CONSERVATION-->
    <div class="col-2">
        <label for="conservation" class="form-label">Conservation</label>
        <select class="form-select" id="conservation"  name="conservation" required>
            <option value="{{$artifact[0]["conservation"]}}">{{$artifact[0]["conservation"]}}</option>
            <option  value="yes">yes</option>
            <option  value="no">no</option>
            <option  value="not recorded">not recorded</option>

        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->
    

</div><!--END ROW-->


<!--FIELDS I  ROW -->
<div class="row">
    <!--PATINATION-->
    <div class="col">
        <label for="patination" class="form-label">Patination</label>
        <select class="form-select" id="patination"  name="patination" required>
            <option value="{{$artifact[0]["patination"]}}">{{$artifact[0]["patination"]}}</option>
            <option>Yes</option>
            <option>No</option>
            <option>N/A (Not Applicable)</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--BURNED?-->
    <div class="col-2">
        <label for="burned" class="form-label">Burned?</label>
        <select class="form-select" id="burned"  name="burned" required>
            <option value="{{$artifact[0]["burned"]}}">{{$artifact[0]["burned"]}}</option>
            <option>Yes</option>
            <option>No</option>
            <option>N/A (Not Applicable)</option>
            <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--WEATHER/ERODED-->
    <div class="col">
        <label for="weather_erode" class="form-label">Weathered/Eroded?</label>
        <select class="form-select" id="weather_erode"  name="weather_erode" required>
        <option value="{{$artifact[0]["weather_erode"]}}">{{$artifact[0]["weather_erode"]}}</option>
        <option>Yes</option>
        <option>No</option>
        <option>N/A (Not Applicable)</option>
        <option>N/R (Not Recorded)</option>
        </select>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

    <!--APPLIED COLOR-->
    <div class="col-2">
        <label for="applied_color" class="form-label">Applied Color</label>
        <input type="text" class="form-control " id="applied_color"  name="applied_color" value="{{$artifact[0]["applied_color"]}}" required>
        <div class="invalid-feedback">
             Required field.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I ROW DECORATIVE-->
<div class="row">
    
    <!--BEAD DECORATION-->
    <div class="col">
        <label for="bead_decoration" class="form-label">Bead Decoration</label>
        <select class="form-select" id="bead_decoration"  name="bead_decoration" required>
            <option value="{{$artifact[0]["bead_decoration"]}}">{{$artifact[0]["bead_decoration"]}}</option>
            <option>Combed Designs</option>
            <option>Crumbs</option>
            <option>Eyes</option>
            <option>Facets, ground/cut</option>
            <option>Facets, paddle/pressed</option>
            <option>Floral Designs</option>
            <option>Insets</option>
            <option>Interwoven Lines</option>
            <option>Monochrome Stripes</option>
            <option>Multi-Colored Stripes</option>
            <option>Nodes</option>
            <option>Plated</option>
            <option>Rings</option>
            <option>Swirls</option>
            <option>Trailed Decoration</option>
            <option>Unidentifiable</option>
            <option>Wavy Lines</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--CASING COLOR -->
    <div class="col-2">
        <label for="casing_color" class="form-label">Casing Color</label>
        <input type="text" class="form-control " id="casing_color"  name="casing_color" value="{{$artifact[0]["casing_color"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

        <!--CASING LAYER-->
        <div class="col-2">
            <label for="casing_layer" class="form-label">Casing Layer</label>
            <select class="form-select" id="casing_layer"  name="casing_layer" required>
                <option value="{{$artifact[0]["casing_layer"]}}">{{$artifact[0]["casing_layer"]}}</option>
                <option>1 (interior)</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10 (exterior)</option>
    
            </select>
            <div class="invalid-feedback">
                 Required field.
            </div>
        </div><!--END COL-->
    

</div><!--END ROW-->


<!--FIELDS I ROW -->
<div class="row">
    <!--Decoration Description -->
    <div class="col">
        <label for="decoration_desc" class="form-label">Decoration Description
            <button type="button" class="btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Helpful explainer">
                <i class="fa-solid fa-circle-question"></i>
          </button>
        </label>
        <textarea class="form-control " id="decoration_desc"  name="decoration_desc" value="{{$artifact[0]["decoration_desc"]}}" rows="3"></textarea>
        <div class="invalid-feedback">
           Required field. 
        </div>
    </div><!--END COL-->





</div><!--END ROW-->
