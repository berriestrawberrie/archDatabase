
<!--FIELDS II ROW -->
<div class="row">
    <!--Stem Shape-->
    <div class="col">
        <label for="stem_shape" class="form-label">Stem Shape </label>
        <select  class="form-select " id="stem_shape"  name="stem_shape" required>
            <option value="{{$artifact[0]["stem_shape"]}}">{{$artifact[0]["stem_shape"]}}</option>
            <option>Angular Knop</option>
            <option>Annular Knop</option>
            <option>Ball Knop</option>
            <option>Bladed Knop</option>
            <option>Inverted Baluster</option>
            <option>Missing Information</option>
            <option>Not Applicable</option>
            <option>Not Recorded</option>
            <option>Pedestal</option>
            <option>Quatrefoil</option>
            <option>Straight Stem</option>
            <option>Unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Total Container Height -->
    <div class="col-3">
        <label for="container_height" class="form-label">Container Height</label>
        <input type="number" class="form-control " id="container_height"  name="container_height"  step="0.01" min="0" value="{{$artifact[0]["container_height"]}}" required>
        <div class="invalid-feedback">
           Required field.
        </div>
    </div><!--END COL-->

    <!--Stem Length-->
    <div class="col-2">
        <label for="stem_length" class="form-label">Stem Length</label>
        <input type="number" class="form-control " id="stem_length"  name="stem_length" min="0" step=".01" value="{{$artifact[0]["stem_length"]}}" required>
        <div class="invalid-feedback">
           Required field.
        </div>
    </div><!--END COL-->



</div><!--END OF ROW-->


<!--FIELDS II ROW -->
<div class="row">
    <!--Glass Marks -->
    <div class="col">
        <label for="glass_marks" class="form-label">Glass Marks</label>
        <input type="text" class="form-control " id="glass_marks"  name="glass_marks" value="{{$artifact[0]["glass_marks"]}}" required>
        <div class="invalid-feedback">
            Required field.
        </div>
    </div><!--END COL-->

    <!--Location of Mark-->
    <div class="col-3">
        <label for="mark_location" class="form-label">Location of Mark</label>
        <select  class="form-select " id="mark_location"  name="mark_location" required>
            <option value="{{$artifact[0]["mark_location"]}}">{{$artifact[0]["mark_location"]}} </option>
            <option>Base</option>
            <option>Body Side</option>
            <option>Heel</option>
            <option>Lid</option>
            <option>Lip</option>
            <option>Neck</option>
            <option>Not Applicable</option>
            <option>Shoulder</option>
            <option>Stem</option>
            <option>Unidentifiable</option>
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


</div><!--END OF ROW-->

 


<!--FIELDS II ROW -->
<div class="row d-flex flex-wrap  align-items-start">
    <div class="d-flex flex-column flex-wrap col-3">
        <!--Sherd Thickness -->
        <div class="col">
            <label for="sherd_thickness" class="form-label">Sherd Thickness</label>
            <input type="number" class="form-control " id="sherd_thickness"  name="sherd_thickness"  step="0.01" min="0" value="{{$artifact[0]["sherd_thickness"]}}"  required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Sherd Size-->
        <div class="col">
            <label for="sherd_size" class="form-label">Sherd Size</label>
            <input type="number" class="form-control " id="sherd_size"  name="sherd_size"  step="0.01" min="0" value="{{$artifact[0]["sherd_size"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Sherd Weight-->
        <div class="col">
            <label for="sherd_weight" class="form-label">Sherd Weight</label>
            <input type="number" class="form-control " id="sherd_weight"  name="sherd_weight"  step="0.01" min="0" value="{{$artifact[0]["sherd_weight"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        
        <!--Mended Sherd Weight-->
        <div class="col">
            <label for="mended_sherd_weight" class="form-label">Mended Sherd Weight</label>
            <input type="number" class="form-control " id="mended_sherd_weight"  name="mended_sherd_weight"  step="0.01" min="0" value="{{$artifact[0]["mended_sherd_weight"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

    </div><!--END FLEX WRAPPER-->

    <div class="d-flex flex-column flex-wrap col-3">
        <!--Length of Rim -->
        <div class="col">
            <label for="rim_length" class="form-label">Length of Rim</label>
            <input type="number" class="form-control " id="rim_length"  name="rim_length"  step="0.01" min="0" value="{{$artifact[0]["rim_length"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Rim Diameter-->
        <div class="col">
            <label for="base_diameter" class="form-label"> Base Diameter</label>
            <input type="number" class="form-control " id="base_diameter"  name="base_diameter"  step="0.01" min="0" value="{{$artifact[0]["base_diameter"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Mended Rim Diameter-->
        <div class="col">
            <label for="mended_base_diameter" class="form-label">Mended Base Diameter</label>
            <input type="number" class="form-control " id="mended_base_diameter"  name="mended_base_diameter"  step="0.01" min="0" value="{{$artifact[0]["mended_base_diameter"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

    </div><!--END FLEX WRAPPER-->

    <div class="d-flex flex-column flex-wrap col-3">
        <!--Base Length -->
        <div class="col">
            <label for="base_length" class="form-label">Base Length</label>
            <input type="number" class="form-control " id="base_length"  name="base_length"  step="0.01" min="0" value="{{$artifact[0]["base_length"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Rim Diameter-->
        <div class="col">
            <label for="rim_diameter" class="form-label">Rim Diameter</label>
            <input type="number" class="form-control " id="rim_diameter"  name="rim_diameter"  step="0.01" min="0" value="{{$artifact[0]["rim_diameter"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Mended Rim Diameter-->
        <div class="col">
            <label for="mended_rim_diameter" class="form-label">Mended Rim Diameter</label>
            <input type="number" class="form-control " id="mended_rim_diameter"  name="mended_rim_diameter"  step="0.01" min="0" value="{{$artifact[0]["mended_rim_diameter"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

    </div><!--END FLEX WRAPPER-->


</div><!--END OF ROW-->