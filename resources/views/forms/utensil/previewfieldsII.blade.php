

<!--FIELDS II ROW -->
<div class="row d-flex flex-wrap justify-content-start align-items-start">

    <div class="col-3">
        <!--Object Length  -->
        <div class="col">
            <label for="object_length" class="form-label">Object Length </label>
            <input type="number" class="form-control " id="object_length"  name="object_length"  step="0.01" min="0" value="{{$artifact[0]["object_length"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

        <!--Object Width-->
        <div class="col">
            <label for="object_width" class="form-label">Object Width</label>
            <input type="number" class="form-control " id="object_width"  name="object_width"  step="0.01" min="0" value="{{$artifact[0]["object_width"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->

            <!--Sherd Weight-->
        <div class="col">
            <label for="object_weight" class="form-label">Object Weight</label>
            <input type="number" class="form-control " id="object_weight"  name="object_weight"  step="0.01" min="0" value="{{$artifact[0]["object_weight"]}}" required>
            <div class="invalid-feedback">
            Required field.
            </div>
        </div><!--END COL-->
    </div>




</div><!--END OF ROW-->