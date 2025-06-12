@if(count($unassigned_ceramics)>0)
    <!--CERAMICS CHECKOUT-->
    <div class="col-md-2">
        <label for="ceramics" class="form-label">Max ({{count($unassigned_ceramics)}})</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Ceramics</span>
            <select type="text" class="form-control" id="ceramics" name="ceramics"  onchange="requireRecord()"  aria-describedby="inputGroupPrepend">
                <option value="0" selected>-</option>
                @for($i=1; $i <= count($unassigned_ceramics); $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <div class="valid-feedback">
            filled
            </div>
        </div>
        </div><!--END OF CERAMICS CHECKOUT-->
@endif

@if(count($unassigned_beads)>0)
    <!--beads CHECKOUT-->
    <div class="col-md-2">
        <label for="beads" class="form-label">Max ({{count($unassigned_beads)}})</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">beads</span>
            <select type="text" class="form-control" id="beads" name="beads"  onchange="requireRecord()" aria-describedby="inputGroupPrepend">
                <option value="0" selected>-</option>
                @for($i=1; $i <= count($unassigned_beads); $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <div class="valid-feedback">
            filled
            </div>
        </div>
    </div><!--END OF beads CHECKOUT-->
@endif

@if(count($unassigned_buckles)>0)
    <!--buckles CHECKOUT-->
    <div class="col-md-2">
        <label for="buckles" class="form-label">Max ({{count($unassigned_buckles)}})</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">buckles</span>
            <select type="text" class="form-control" id="buckles" name="buckles"  onchange="requireRecord()" aria-describedby="inputGroupPrepend">
                <option value="0" selected>-</option>
                @for($i=1; $i <= count($unassigned_buckles); $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <div class="valid-feedback">
            filled
            </div>
        </div>
    </div><!--END OF buckles CHECKOUT-->
@endif
