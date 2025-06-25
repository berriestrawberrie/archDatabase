
<!--FIELDS II ROW -->
<div class="row">
    <!--Stem Length -->
    <div class="col-3">
        <label for="stem_length" class="form-label">Stem Length </label>
        <input type="number" class="form-control " id="stem_length"  name="stem_length"  step="0.01" min="0" value="{{$artifact[0]["stem_length"]}}"required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    <!--Exterior Stem Diameter -->
    <div class="col-3">
        <label for="exterior_stem_diameter" class="form-label">Exterior Stem Diameter </label>
        <input type="number" class="form-control " id="exterior_stem_diameter"  name="exterior_stem_diameter"  step="0.01" min="0" value="{{$artifact[0]["exterior_stem_diameter"]}}" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    <!--Bore Diameter -->
    <div class="col-3">
        <label for="bore_diameter" class="form-label"> Bore Diameter</label>
        <input type="number" class="form-control " id="bore_diameter" value="{{$artifact[0]["bore_diameter"]}}"  name="bore_diameter" min="0"  step="0.01" required>
        <div class="invalid-feedback">
            Must enter bead height
        </div>
    </div><!--END COL-->

</div><!--END OF ROW-->

<!--FIELDS II ROW -->
<div class="row">
    <!--64ths Bore Diameter  -->
    <div class="col-3">
        <label for="64_bore_diameter" class="form-label"> 64ths Bore Diameter </label>
        <input type="number" class="form-control " id="64_bore_diameter" value="{{$artifact[0]["64_bore_diameter"]}}"  name="64_bore_diameter"  step="0.01" min="0" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    <!--Bowl Height-->
    <div class="col-3">
        <label for="bowl_height" class="form-label"> Complete Bowl Height </label>
        <input type="number" class="form-control " id="bowl_height" value="{{$artifact[0]["bowl_height"]}}"  name="bowl_height"  step="0.01" min="0" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    
    <!--Maximum Bowl Diameter -->
    <div class="col-3">
        <label for="max_bowl_diameter" class="form-label">Maximum Bowl Diameter </label>
        <input type="number" class="form-control " id="max_bowl_diameter" value="{{$artifact[0]["max_bowl_diameter"]}}"  name="max_bowl_diameter"  step="0.01" min="0" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->



</div><!--END OF ROW-->


<!--FIELDS II ROW-->
<div class="row">
    <!--Bowl Rim Diameter -->
    <div class="col-3">
        <label for="bowl_rim_diameter" class="form-label">Bowl Rim Diameter</label>
        <input type="number" class="form-control " id="bowl_rim_diameter" value="{{$artifact[0]["bowl_rim_diameter"]}}"  name="bowl_rim_diameter"  step="0.01" min="0" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    <!--Weight -->
    <div class="col-3">
        <label for="weight" class="form-label">Weight</label>
        <input type="number" class="form-control " id="weight" value="{{$artifact[0]["weight"]}}"  name="weight"  step="0.01" min="0" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->

    <!--Max Sherd Measurement  -->
    <div class="col-3">
        <label for="max_sherd" class="form-label">Max Sherd Measurement </label>
        <input type="number" class="form-control " id="max_sherd" value="{{$artifact[0]["max_sherd"]}}"  name="max_sherd"  step="0.01" min="0" required>
        <div class="invalid-feedback">
            Must enter
        </div>
    </div><!--END COL-->


</div><!--END OF ROW-->