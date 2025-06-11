
<!--FIELDS II ROW -->
<div class="row">
    <div class="d-flex flex-column col-3"> 
        <!--BEAD LENGTH-->
        <div class="col">
            <label for="bead_length" class="form-label">Bead Length</label>
            <input type="number" class="form-control " id="bead_length"  name="bead_length"  step="0.01" min="0" value="{{$artifact[0]["bead_length"]}}" required>
            <div class="invalid-feedback">
                Required field.
            </div>
        </div><!--END COL-->

        <!--BEAD WIDTH-->
        <div class="col">
            <label for="bead_width" class="form-label">Bead Width</label>
            <input type="number" class="form-control " id="bead_width"  name="bead_width"  step="0.01" min="0" value="{{$artifact[0]["bead_width"]}}" required>
            <div class="invalid-feedback">
                Required field.
            </div>
        </div><!--END COL-->

        <!--BEAD HEIGHT -->
        <div class="col">
            <label for="bead_height" class="form-label">Bead Height</label>
            <input type="number" class="form-control " id="bead_height"  name="bead_height" min="0"  step="0.01" value="{{$artifact[0]["bead_height"]}}" required>
            <div class="invalid-feedback">
                Required field.
            </div>
        </div><!--END COL-->


    </div>

    <div class="d-flex flex-column col-3">
        <!--BEAD WEIGHT-->
        <div class="col">
            <label for="bead_weight" class="form-label">Bead Weight</label>
            <input type="number" class="form-control " id="bead_weight"  name="bead_weight"  step="0.01" min="0" value="{{$artifact[0]["bead_weight"]}}" required>
            <div class="invalid-feedback">
                Required field.
            </div>
        </div><!--END COL-->
        <!--Size of Perforation I-->
        <div class="col">
            <label for="perforation_1" class="form-label">Size of Perforation I</label>
            <input type="number" class="form-control " id="perforation_1"  name="perforation_1" min="0"  step="0.01"  value="{{$artifact[0]["perforation_1"]}}"  required>
            <div class="invalid-feedback">
                Required field.
            </div>
        </div><!--END COL-->

        <!--Size of Perforation II-->
        <div class="col">
            <label for="perforation_2" class="form-label">Size of Perforation II</label>
            <input type="number" class="form-control " id="perforation_2"  name="perforation_2" min="0"  step="0.01"  value="{{$artifact[0]["perforation_2"]}}"  required>
            <div class="invalid-feedback">
                Required field.
            </div>
        </div><!--END COL-->

    </div>

</div><!--END OF ROW-->