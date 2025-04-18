<!--FIELDS II ROW 1-->
<div class="row">

    <div class="col-6">

        <!--PATTERN NAME-->
        <div >
            <label for="pattern_name" class="form-label">Pattern Name</label>
            <select class="form-control " id="pattern_name"  name="pattern_name" required>
                <option disabled selected value> -- select an option -- </option>
                <option  value="goat">goat</option>
                <option  value="altar of love (valentine)">altar of love (valentine)</option>
                <option  value="asiatic plants">asiatic plants</option>
                <option  value="belzoni">belzoni</option>
                <option  value="caledonia">caledonia</option>
                <option  value="canton">canton</option>
                <option  value="chevy chase">chevy chase</option>
                <option  value="chinese landscape pattern 1">chinese landscape pattern 1</option>
                <option  value="cornflower">cornflower</option>
                <option  value="cyrene">cyrene</option>
                <option  value="dagoty et honore paris">dagoty et honore paris</option>
                <option  value="dogs on the scent">dogs on the scent</option>
                <option  value="famille rose">famille rose</option>
                <option  value="famille verte">famille verte</option>
                <option  value="fitzhugh">fitzhugh</option>
                <option  value="flower basket">flower basket</option>
                <option  value="flower/ scroll/ medallion (1820)">flower/ scroll/ medallion (1820)</option>
                <option  value="flowers and leaves">flowers and leaves</option>
                <option  value="genoa">genoa</option>
                <option  value="grape/ bamboo/ and squirrel">grape/ bamboo/ and squirrel</option>
                <option  value="grecian pattern">grecian pattern</option>
                <option  value="nanking">nanking</option>
                <option  value="not applicable">not applicable</option>
                <option  value="oriental">oriental</option>
                <option  value="pinwheel pattern">pinwheel pattern</option>
                <option  value="pomerania">pomerania</option>
                <option  value="spanish procession">spanish procession</option>
                <option  value="sydenham">sydenham</option>
                <option  value="syrian">syrian</option>
                <option  value="unidentifiable">unidentifiable</option>
                <option  value="wild rose">wild rose</option>
                <option  value="willow pattern">willow pattern</option>

            </select>
            <div class="invalid-feedback">
                Must select ceramic form. 
            </div>
        </div><!--END COL-->


         <!--PATTERN REFERENCE-->
        <div >
            <label for="pattern_reference" class="form-label">Pattern Reference</label>
            <input type="text" class="form-control " id="pattern_reference"  name="pattern_reference">
                <div class="valid-feedback">
                    Optional field
                </div>
        </div><!--END COL-->

    </div><!---->

    <!--PATTERN NOTES-->
    <div class="col">
        <label for="pattern_notes" class="form-label">Pattern Notes</label>
        <textarea class="form-control " id="pattern_notes"  name="pattern_notes" rows="4"></textarea>
    </div><!--END COL-->

</div><!--END OF ROW-->

<!--FIELDS II ROW 2-->
<div class="row">
    <!--BASE MARK-->
    <div class="col">
        <label for="base_mark" class="form-label">Base Mark</label>
        <select class="form-control " id="base_mark"  name="base_mark" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="impressed">impressed</option>
            <option  value="incised">incised</option>
            <option  value="not applicable">not applicable</option>
            <option  value="painted">painted</option>
            <option  value="printed">printed</option>
            <option  value="unidentifiable">unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select a base mark.
        </div>
    </div><!--END COL-->

    <!--BASE MARK REF-->
    <div class="col">
        <label for="base_mark_ref" class="form-label">Base Mark Ref.</label>
        <input type="text" class="form-control " id="base_mark_ref"  name="base_mark_ref" >
        <div class="valid-feedback">
            optional field
        </div>
    </div><!--END COL-->
    
    <!--BASE MARK COLOR-->
    <div class="col">
        <label for="base_mark_color" class="form-label">Base Mark Color</label>
        <input type="text" class="form-control " id="base_mark_color"  name="base_mark_color" required>
        <div class="invalid-feedback">
            Must enter a base mark color. 
        </div>
    </div><!--END COL-->

</div><!--END OF ROW-->


<!--FIELDS II ROW 3-->
<div class="row">
    <!--COLONOWARE-->
    <div class="col">
        <label for="colonoware" class="form-label">Colonoware</label>
        <select class="form-control " id="colonoware"  name="colonoware" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="base">base</option>
            <option  value="body">body</option>
            <option  value="finial">finial</option>
            <option  value="finial lid">finial lid</option>
            <option  value="foot">foot</option>
            <option  value="handle">handle</option>
            <option  value="handle terminal">handle terminal</option>
            <option  value="lid">lid</option>
            <option  value="neck">neck</option>
            <option  value="rim">rim</option>
            <option  value="shoulder">shoulder</option>
            <option  value="spout">spout</option>
            <option  value="unidentifiable">unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select a colonoware. 
        </div>
    </div><!--END COL-->

    <!--COLONO RIM FORM-->
    <div class="col">
        <label for="colono_rim_form" class="form-label">Colono Rim Form</label>
        <select class="form-control " id="colono_rim_form"  name="colono_rim_form" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="everted">everted</option>
            <option  value="inverted">inverted</option>
            <option  value="not applicable">not applicable</option>
            <option  value="straight">straight</option>
            <option  value="unidentifiable">unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select colono rim form
        </div>
    </div><!--END COL-->

    <!--COLONO RIM ANGLE-->
    <div class="col-2">
        <label for="colono_rim_angle" class="form-label">Rim Angle</label>
        <select class="form-control " id="colono_rim_angle"  name="colono_rim_angle" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="0">0</option>
            <option  value="15">15</option>
            <option  value="20">20</option>
            <option  value="25">25</option>
            <option  value="30">30</option>
            <option  value="35">35</option>
            <option  value="40">40</option>
            <option  value="45">45</option>
            <option  value="50">50</option>
            <option  value="55">55</option>
            <option  value="60">60</option>
            <option  value="65">65</option>
            <option  value="70">70</option>
            <option  value="75">75</option>
            <option  value="80">80</option>
            <option  value="85">85</option>
            <option  value="90">90</option>
            <option  value="95">95</option>
            <option  value="100">100</option>
            <option  value="105">105</option>
            <option  value="not applicable">not applicable</option>
            <option  value="unmeasurable">unmeasurable</option>
        </select>
        <div class="invalid-feedback">
            Must select rim angle. 
        </div>
    </div><!--END COL-->
    
    <!--MAX RIM WIDTH-->
    <div class="col-2">
        <label for="max_rim_width" class="form-label">Max Width  
            <button type="button" class=" btn-xsm" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Decimal up to (2) places">
                <i class="fa-solid fa-circle-question"></i></button></label>
        <input type="number" class="form-control " id="max_rim_width"  name="max_rim_width" min="0" required>
        <div class="invalid-feedback">
            Must enter max rim width. 
        </div>
    </div><!--END COL-->

</div><!--END OF ROW-->

<!--FIELDS II ROW 4-->
<div class="row">

    <!--COLONO DECORATION MODE-->
    <div class="col">
        <label for="colono_decoration_mode" class="form-label">Colono Decoration Mode</label>
        <select class="form-control " id="colono_decoration_mode"  name="colono_decoration_mode" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="brushed">brushed</option>
            <option  value="burnished">burnished</option>
            <option  value="combed">combed</option>
            <option  value="cut">cut</option>
            <option  value="impressed cord">impressed cord</option>
            <option  value="impressed corn cob">impressed corn cob</option>
            <option  value="impressed fabric">impressed fabric</option>
            <option  value="impressed finger">impressed finger</option>
            <option  value="impressed net">impressed net</option>
            <option  value="impressed thimble">impressed thimble</option>
            <option  value="impressed unidentifiable">impressed unidentifiable</option>
            <option  value="incised">incised</option>
            <option  value="not applicable">not applicable</option>
            <option  value="notched">notched</option>
            <option  value="painted">painted</option>
            <option  value="pierced">pierced</option>
            <option  value="punctate">punctate</option>
            <option  value="scalloped edge">scalloped edge</option>
            <option  value="slip unidentifed">slip unidentifed</option>
            <option  value="slipped black">slipped black</option>
            <option  value="slipped red/red">slipped red/red</option>
            <option  value="slipped self">slipped self</option>
            <option  value="stamped check">stamped check</option>
            <option  value="stamped complicated curvilinear">stamped complicated curvilinear</option>
            <option  value="stamped complicated rectilinear">stamped complicated rectilinear</option>
            <option  value="stamped simple">stamped simple</option>
            <option  value="stamped unidentifiable">stamped unidentifiable</option>
            
        </select>
        <div class="invalid-feedback">
            Must select a colono decoration mode. 
        </div>
    </div><!--END COL-->

    <!--COLONO BASE FORM-->
    <div class="col">
        <label for="colono_base_form" class="form-label">Colono Base Form</label>
        <select class="form-control " id="colono_base_form"  name="colono_base_form" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="flat">flat</option>
            <option  value="footring">footring</option>
            <option  value="not applicable">not applicable</option>
            <option  value="round">round</option>
            <option  value="unidentifiable">unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select a colono base form.
        </div>
    </div><!--END COL-->

    <!--COLONO FOOTRING FORM-->
    <div class="col">
        <label for="colono_footring_form" class="form-label">Colono Footring Form</label>
        <select class="form-control " id="colono_footring_form"  name="colono_footring_form" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="footring">footring</option>
            <option  value="no footring">no footring</option>
            <option  value="not applicable">not applicable</option>
            <option  value="pedestal footring">pedestal footring</option>

        </select>
        <div class="invalid-feedback">
            Must select ceramic form. 
        </div>
    </div><!--END COL-->

</div><!--END OF ROW-->

<!--FIELDS II ROW 5-->
<div class="row">

    <div class="col">
        <!--NON PLAST PASTE INCLUSION-->
        <div>
            <label for="non_plastic_paste_inclusions" class="form-label">Non-Plastic Paste Incl.</label>
            <select class="form-control " id="non_plastic_paste_inclusions"  name="non_plastic_paste_inclusions" required>
                <option disabled selected value> -- select an option -- </option>
                <option  value="back crypto-crystalline">back crypto-crystalline</option>
                <option  value="grog">grog</option>
                <option  value="hematite">hematite</option>
                <option  value="limestone">limestone</option>
                <option  value="mica">mica</option>
                
            </select>
            <div class="invalid-feedback">
                Must select non plastic paste inclusions
            </div>
        </div><!--END COL-->

        <!--TOTAL PASTE INCLUSION-->
        <div>
            <label for="total_paste_inclusion_density" class="form-label">Total Paste Inclu. Density</label>
            <select class="form-control " id="total_paste_inclusion_density"  name="total_paste_inclusion_density" required>
                <option disabled selected value> -- select an option -- </option>
                <option  value="greater than 7.5 less than 15">greater than 7.5 less than 15</option>
                <option  value="greater than or equal to 15">greater than or equal to 15</option>
                <option  value="less than or equal to 7.5">less than or equal to 7.5</option>
                <option  value="not applicable">not applicable</option>
                <option  value="unidentifiable">unidentifiable</option>
                
            </select>
            <div class="invalid-feedback">
                Must select total paste inclusion density.
            </div>
        </div><!--END COL-->

    </div>

    <div class="col">

        <!--WEAR LOCATION-->
        <div>
                <label for="wear_location" class="form-label">Wear Location</label>
                <select class="form-control " id="wear_location"  name="wear_location" required>
                    <option disabled selected value> -- select an option -- </option>
                    <option  value="exterior">exterior</option>
                    <option  value="interior">interior</option>
                    <option  value="not applicable">not applicable</option>
                    <option  value="unidentifiable">unidentifiable</option>
                    
                </select>
                <div class="invalid-feedback">
                    Must select a wear location
                </div>
        </div><!--END COL-->

        <!--WEAR PATTERN -->
        <div >
            <label for="wear_pattern" class="form-label">Wear Pattern</label>
            <select class="form-control " id="wear_pattern"  name="wear_pattern" required>
                <option disabled selected value> -- select an option -- </option>
                <option  value="base abrasion">base abrasion</option>
                <option  value="fire-clouding">fire-clouding</option>
                <option  value="partial missing surface">partial missing surface</option>
                <option  value="residue/soot">residue/soot</option>
                <option  value="spalling">spalling</option>
                <option  value="toothbrush abrasion">toothbrush abrasion</option>
                <option  value="utensil wear">utensil wear</option>
                <option  value="worn/abraded">worn/abraded</option>
                
            </select>
            <div class="invalid-feedback">
                Must select a wear pattern. 
            </div>
        </div><!--END COL-->
    </div>

</div><!--END OF ROW-->


<!--FIELDS II ROW 6-->
<div class="row">
    <!--SHERD THICKNESS-->
    <div class="col">
        <label for="sherd_thickness" class="form-label">Sherd Thickness</label>
        <input type="number" class="form-control " id="sherd_thickness"  name="sherd_thickness" min="0" required>
        <div class="invalid-feedback">
            Must enter sherd thickness
        </div>
    </div><!--END COL-->

    <!--MAX SHERD MEASURE-->
    <div class="col">
        <label for="max_sherd_measurement" class="form-label">Max Sherd Measurement</label>
        <input type="number" class="form-control " id="max_sherd_measurement"  name="max_sherd_measurement" min="0" required>
        <div class="invalid-feedback">
            Must enter max sherd measurement. 
        </div>
    </div><!--END COL-->

    <!--SHERD WEIGHT-->
    <div class="col">
        <label for="sherd_weight" class="form-label">Sherd Wght.</label>
        <input type="number" class="form-control " id="sherd_weight"  name="sherd_weight" min="0" required>
        <div class="invalid-feedback">
            Must enter sherd weight
        </div>
    </div><!--END COL-->

    <!--MENDED SHERD WEIGHT-->
    <div class="col">
        <label for="mended_sherd_weight" class="form-label">Mended Sherd Wght.</label>
        <input type="number" class="form-control " id="mended_sherd_weight"  name="mended_sherd_weight" min="0" required>
        <div class="invalid-feedback">
            Must enter sherd thickness
        </div>
    </div><!--END COL-->

</div><!--END OF ROW-->

<!--FIELDS II ROW 7-->
<div class="row">
    <!--RIM LENGTH-->
    <div class="col">
        <label for="rim_length" class="form-label">Rim Length</label>
        <input type="number" class="form-control " id="rim_length"  name="rim_length" min="0" required>
        <div class="invalid-feedback">
            Must enter rim length
        </div>
    </div><!--END COL-->

    <!--RIM DIAMETER-->
    <div class="col">
        <label for="rim_diameter" class="form-label">Rim Diameter</label>
        <input type="number" class="form-control " id="rim_diameter"  name="rim_diameter" min="0" required>
        <div class="invalid-feedback">
            Must enter rim diameter. 
        </div>
    </div><!--END COL-->

    <!--MENDED RIM DIAMETER-->
    <div class="col">
        <label for="mended_rim_diameter" class="form-label">Mended Rim Diameter</label>
        <input type="number" class="form-control " id="mended_rim_diameter"  name="mended_rim_diameter" min="0" required>
        <div class="invalid-feedback">
            Must enter mended rim diameter
        </div>
    </div><!--END COL-->

    <!--BASE LENGTH-->
    <div class="col">
        <label for="base_length" class="form-label">Base Length</label>
        <input type="number" class="form-control " id="base_length"  name="base_length" min="0" required>
        <div class="invalid-feedback">
            Must enter base length
        </div>
    </div><!--END COL-->

    <!--BASE DIAMETER-->
    <div class="col">
        <label for="base_diameter" class="form-label">Base Diameter</label>
        <input type="number" class="form-control " id="base_diameter"  name="base_diameter" min="0" required>
        <div class="invalid-feedback">
            Must enter base diameter. 
        </div>
    </div><!--END COL-->

    <!--MENDED BASE DIAMETER-->
    <div class="col">
        <label for="mended_base_diameter" class="form-label">Mended Base Diameter</label>
        <input type="number" class="form-control " id="mended_base_diameter"  name="mended_base_diameter" min="0" required>
        <div class="invalid-feedback">
            Must enter mended base diameter. 
        </div>
    </div><!--END COL-->


</div><!--END OF ROW-->