
    <h4>General Information</h4>
    <div class="row">
        <div class="col">
            <label for="entered_by" class="form-label">
                
                Entered By  

            </label>
            <input type="text" class="form-control" id="entered_by" value="{{Auth::user()->name}}" name="entered_by" required>
            <div class="valid-feedback">
                filled
            </div>
            <div class="invalid-feedback">
                Enter your name
              </div>
        </div>

        <div class="col">
            <label for="created_at" class="form-label">Date Entered </label>
            <input type="date" class="form-control" id="created_at" value="{{ date("Y-m-d")}}" name="created_at" required>
            <div class="valid-feedback">
                filled
            </div>
            <div class="invalid-feedback">
                Enter Today's date
              </div>
        </div>

    </div>

    <h4>Site Information</h4>
    <div class="row">
        <div class="col-6">
            <label for="collection" class="form-label">Collection</label>
            <input type="text" class="form-control" id="collection" value="{{$collections[0]["collection"]}}"name="collection" required>
            <div class="valid-feedback">
                filled
            </div>
            <div class="invalid-feedback">
                {{$collections[0]["collection"]}} is the collection
              </div>
        </div>
        <div class="col">
            <label for="completeness" class="form-label">Completeness</label>
            <select class="form-control" id="completeness" name="completeness" required>
                <option value="" disabled selected>Select an option</option>
                <option>complete</option>
                <option>incomplete</option>
                <option>not recorded</option>
            </select>
            <div class="valid-feedback">
                filled
            </div>
            <div class="invalid-feedback">
                Please select an option. 
            </div>
        </div>
        <div class="col">
            <label for="artifact_count" class="form-label">Artifact Count</label>
            <input type="number" class="form-control" id="artifact_count" min="1"  max="99" name="artifact_count"required>
            <div class="valid-feedback">
                filled
            </div>
            <div class="invalid-feedback">
                Artifact must be entered and less than 99. 
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="notes" class="form-label">Field Notes</label>
            <input type="textarea" class="form-control" id="notes" placeholder="Notes if any"  name="notes" >
            <div class="valid-feedback">
                filled
            </div>
            <div class="invalid-feedback">
                Notes feedback?
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-10"></div>
        <div class="col"></div>
        <div class="col">
            <button class="btn btn-primary my-2" id="next-profile">Next</button>
        </div>
    </div>

    
