
<!--FIELDS II ROW -->
<div class="row d-flex">
    <div class="col-3">
            <!--Button Length -->
    <div class="col">
        <label for="button_length" class="form-label">Button Length </label>
        <input type="number" class="form-control " id="button_length"  name="button_length"  step="0.01" min="0" value="{{$artifact[0]["button_length"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Button Width -->
    <div class="col">
        <label for="button_width" class="form-label">Button Width</label>
        <input type="number" class="form-control " id="button_width"  name="button_width"  step="0.01" min="0" value="{{$artifact[0]["button_width"]}}" required>
        <div class="invalid-feedback">
           Required field.
        </div>
    </div><!--END COL-->
    </div>

    <div class="col-3">
        <!--Button Height-->
    <div class="col">
        <label for="button_height" class="form-label"> Button Height </label>
        <input type="number" class="form-control " id="button_height"  name="button_height"  step="0.01" min="0" value="{{$artifact[0]["button_height"]}}" required>
        <div class="invalid-feedback">
           Required field.
        </div>
    </div><!--END COL-->

    
    <!--Button Diameter -->
    <div class="col">
        <label for="button_diameter" class="form-label">Button Diameter </label>
        <input type="number" class="form-control " id="button_diameter"  name="button_diameter"  step="0.01" min="0" value="{{$artifact[0]["button_diameter"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->
    </div>




</div><!--END OF ROW-->

