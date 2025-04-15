<!--FIELDS I ROW 1-->
<div class="row">

    <!--MANUFACTURING-->
    <div class="col">
        <label for="manufacturing_technique" class="form-label">Manufacturing Tech.</label>
        <select class="form-control " id="manufacturing_technique"  name="manufacturing_technique" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="handbuild coil">handbuild coil</option>
            <option  value="handbuild unidentifiable">handbuild unidentifiable</option>
            <option  value="missing">missing</option>
            <option  value="not applicable">not applicable</option>
            <option  value="press molded">press molded</option>
            <option  value="slip cast">slip cast</option>
            <option  value="unidentifiable">unidentifiable</option>
            <option  value="wheel thrown">wheel thrown</option>
        </select>
        <div class="invalid-feedback">
            Must select a manufacturing technique
        </div>
    </div><!--END COL-->

    <!--MATERIAL-->
    <div class="col">
        <label for="material" class="form-label">Material</label>
        <select class="form-control " id="material"  name="material" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="coarse earthenware">Coarse Earthenware</option>
            <option  value="porcelain">Porcelain</option>
            <option  value="refined earthenware">Refined Earthenware</option>
            <option  value="stoneware">Stoneware</option>
            <option  value="unidentifiable">Unidentifiable</option>

        </select>
        <div class="invalid-feedback">
           Must select ceramic material. 
        </div>
    </div><!--END COL-->

    <!--WARE-->
    <div class="col">
        <label for="ware" class="form-label">Ware</label>
        <select class="form-select" id="ware" required>
            <option selected disabled value=""> -- select an option -- </option>
            <option  value="afro-caribbean ware">afro-caribbean ware</option>
            <option  value="agate refined">agate refined</option>
            <option  value="american stoneware">american stoneware</option>
            <option  value="astbury type">astbury type</option>
            <option  value="bennington/rockingham">bennington/rockingham</option>
            <option  value="black basalt">black basalt</option>
            <option  value="british stoneware">british stoneware</option>
            <option  value="buckley">buckley</option>
            <option  value="burslem">burslem</option>
            <option  value="canary ware">canary ware</option>
            <option  value="carolina creamware">carolina creamware</option>
            <option  value="coarse earthenware unidentified">coarse earthenware unidentified</option>
            <option  value="colonware">colonware</option>
            <option  value="creamware">creamware</option>
            <option  value="delftware dutch/british">delftware dutch/british</option>
            <option  value="derbyshire">derbyshire</option>
            <option  value="faience">faience</option>
            <option  value="frechen brown">frechen brown</option>
            <option  value="french coarse earthenware">french coarse earthenware</option>
            <option  value="fulham type">fulham type</option>
            <option  value="german stoneware">german stoneware</option>
            <option  value="iberian ware">iberian ware</option>
            <option  value="ironstone/white granite">ironstone/white granite</option>
            <option  value="jackfield type">jackfield type</option>
            <option  value="jasperware">jasperware</option>
            <option  value="native american/unidentified">native american/unidentified</option>
            <option  value="north devon gravel tempered">north devon gravel tempered</option>
            <option  value="north devon plain">north devon plain</option>
            <option  value="nottingham">nottingham</option>
            <option  value="pearlware">pearlware</option>
            <option  value="porcelain chinese">porcelain chinese</option>
            <option  value="porcelain english bone china">porcelain english bone china</option>
            <option  value="porcelain french">porcelain french</option>
            <option  value="porcelain japanese">porcelain japanese</option>
            <option  value="porcelain unidentifiable">porcelain unidentifiable</option>
            <option  value="porcellaneous english hard paste">porcellaneous english hard paste</option>
            <option  value="post-medieval london-area redware">post-medieval london-area redware</option>
            <option  value="red agate coarse">red agate coarse</option>
            <option  value="red agated refined">red agated refined</option>
            <option  value="red sandy ware">red sandy ware</option>
            <option  value="redware">redware</option>
            <option  value="redware refined">redware refined</option>
            <option  value="refined earthenware modern">refined earthenware modern</option>
            <option  value="refined earthenware unidentifiable">refined earthenware unidentifiable</option>
            <option  value="refined stoneware unidentifiable">refined stoneware unidentifiable</option>
            <option  value="rosso antico">rosso antico</option>
            <option  value="shaw stoneware">shaw stoneware</option>
            <option  value="slip dip">slip dip</option>
            <option  value="slipware north italian">slipware north italian</option>
            <option  value="slipware north midlands/staffordshire">slipware north midlands/staffordshire</option>
            <option  value="spanish coarse earthenware">spanish coarse earthenware</option>
            <option  value="staffordshire brown stoneware">staffordshire brown stoneware</option>
            <option  value="staffordshire mottled glaze">staffordshire mottled glaze</option>
            <option  value="stoneware unidentifiable">stoneware unidentifiable</option>
            <option  value="tin-enameled unidentified">tin-enameled unidentified</option>
            <option  value="turner type">turner type</option>
            <option  value="unidentifable">unidentifable</option>
            <option  value="wedgwood green">wedgwood green</option>
            <option  value="westerwald/rhenish">westerwald/rhenish</option>
            <option  value="whieldon-type ware">whieldon-type ware</option>
            <option  value="white salt gaze">white salt gaze</option>
            <option  value="whiteware">whiteware</option>
            <option  value="yellow ware">yellow ware</option>

        </select>
        <div class="invalid-feedback">
           Must select a ware material.
        </div>
    </div><!--END COL-->

    <!--FORM-->
    <div class="col">
        <label for="form" class="form-label">Ceramic Form</label>
        <select class="form-control " id="form"  name="form" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="basket">basket</option>
            <option  value="berry dish">berry dish</option>
            <option  value="bottle">bottle</option>
            <option  value="bottle blacking">bottle blacking</option>
            <option  value="bowl">bowl</option>
            <option  value="bowl punch">bowl punch</option>
            <option  value="bowl slop">bowl slop</option>
            <option  value="box">box</option>
            <option  value="castor">castor</option>
            <option  value="chafing dish">chafing dish</option>
            <option  value="chamberpot">chamberpot</option>
            <option  value="coffee pot">coffee pot</option>
            <option  value="colander">colander</option>
            <option  value="creamer">creamer</option>
            <option  value="cup">cup</option>
            <option  value="cup lidded">cup lidded</option>
            <option  value="dish (>10" diameter)">dish (>10" diameter)</option>
            <option  value="dish (7"-10" diameter)">dish (7"-10" diameter)</option>
            <option  value="drinking pot">drinking pot</option>
            <option  value="drug jar/salve pot">drug jar/salve pot</option>
            <option  value="flower pot">flower pot</option>
            <option  value="gaming piece">gaming piece</option>
            <option  value="griddle">griddle</option>
            <option  value="inkwell">inkwell</option>
            <option  value="jar">jar</option>
            <option  value="jar mustard">jar mustard</option>
            <option  value="jug">jug</option>
            <option  value="kiln furniture">kiln furniture</option>
            <option  value="lid">lid</option>
            <option  value="milk pan">milk pan</option>
            <option  value="mold jelly">mold jelly</option>
            <option  value="mug/can">mug/can</option>
            <option  value="not applicable">not applicable</option>
            <option  value="not mended">not mended</option>
            <option  value="not recorded">not recorded</option>
            <option  value="patty pan">patty pan</option>
            <option  value="pipkin">pipkin</option>
            <option  value="pitcher/ewer">pitcher/ewer</option>
            <option  value="plate">plate</option>
            <option  value="platter">platter</option>
            <option  value="porringer">porringer</option>
            <option  value="pot/butter pot">pot/butter pot</option>
            <option  value="saucer">saucer</option>
            <option  value="sea kale pot">sea kale pot</option>
            <option  value="serving dish misc">serving dish misc</option>
            <option  value="storage jar">storage jar</option>
            <option  value="storage vessel">storage vessel</option>
            <option  value="strainer">strainer</option>
            <option  value="tankard">tankard</option>
            <option  value="tea caddy">tea caddy</option>
            <option  value="teabowl">teabowl</option>
            <option  value="teacup">teacup</option>
            <option  value="teapot">teapot</option>
            <option  value="tureen">tureen</option>
            <option  value="unid: tableware">unid: tableware</option>
            <option  value="unid:teware">unid:teware</option>
            <option  value="unid:utilitarian">unid:utilitarian</option>
            <option  value="unidentifable">unidentifable</option>
            <option  value="vegetable dish">vegetable dish</option>
            <option  value="water cooler">water cooler</option>

        </select>
        <div class="invalid-feedback">
            Must select ceramic form. 
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I  ROW 2-->
<div class="row">
    <!--OXIDIEZED VS REDUCED-->
    <div class="col">
        <label for="oxidized_vs_reduced_fabric" class="form-label">Oxidized vs. Reduced Fabric</label>
        <select class="form-control " id="oxidized_vs_reduced_fabric"  name="oxidized_vs_reduced_fabric" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="not recorded">not recorded</option>
            <option  value="not reduced">not reduced</option>
            <option  value="reduced">reduced</option>
            <option  value="unidentifiable">unidentifiable</option>
        </select>
        <div class="invalid-feedback">
            Must select ceramic form. 
        </div>
    </div><!--END COL-->

    <!--EVIDENCE OF BURNING-->
    <div class="col">
        <label for="evidence_of_burning" class="form-label">Evidence of Burning</label>
        <select class="form-control " id="evidence_of_burning"  name="evidence_of_burning" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="both interior and exterior">both interior and exterior</option>
            <option  value="exterior burned">exterior burned</option>
            <option  value="interior burned">interior burned</option>
            <option  value="not recorded">not recorded</option>
            <option  value="sides burned">sides burned</option>
            <option  value="unburned">unburned</option>

        </select>
        <div class="invalid-feedback">
            Must select make a selection for burning.
        </div>
    </div><!--END COL-->


    <!--VESSEL CATEGORY-->
    <div class="col-2">
        <label for="vessel_category" class="form-label">Vessel Category</label>
        <select class="form-control " id="vessel_category"  name="vessel_category" required>
            <option disabled selected value> -- select an option -- </option>
            <option  value="vessel_category">vessel_category</option>
            <option  value="hollow">hollow</option>
            <option  value="flat">flat</option>
            <option  value="unidentifiable">unidentifiable</option>

        </select>
        <div class="invalid-feedback">
            Must select a vessel category.
        </div>
    </div><!--END COL-->

</div><!--END ROW-->

<!--FIELDS I  ROW 3-->
<div class="row">
    <!--MENDED-->
    <div class="col-2">
        <label for="mended" class="form-label">Mended?</label>
        <select class="form-control " id="mended"  name="mended" required onchange="getMended()">
            <option disabled selected value> -- select an option -- </option>
            <option  value="yes">yes</option>
            <option  value="no">no</option>
            <option  value="not recorded">not recorded</option>

        </select>
        <div class="invalid-feedback">
            Must select mended option.
        </div>
    </div><!--END COL-->

    <!--MENDED FORM-->
    <div class="col">
        <label for="mended_form" class="form-label">Mended Form</label>
        <select class="form-control " id="mended_form"  name="mended_form" required>
            <option disabled selected value id="mended_default"> -- select an option -- </option>
            <option  value="basket">basket</option>
            <option  value="berry dish">berry dish</option>
            <option  value="bottle">bottle</option>
            <option  value="bottle blacking">bottle blacking</option>
            <option  value="bowl">bowl</option>
            <option  value="bowl punch">bowl punch</option>
            <option  value="bowl slop">bowl slop</option>
            <option  value="box">box</option>
            <option  value="castor">castor</option>
            <option  value="chafing dish">chafing dish</option>
            <option  value="chamberpot">chamberpot</option>
            <option  value="coffee pot">coffee pot</option>
            <option  value="colander">colander</option>
            <option  value="creamer">creamer</option>
            <option  value="cup">cup</option>
            <option  value="cup lidded">cup lidded</option>
            <option  value="dish (>10" diameter)">dish (>10" diameter)</option>
            <option  value="dish (7"-10" diameter)">dish (7"-10" diameter)</option>
            <option  value="drinking pot">drinking pot</option>
            <option  value="drug jar/salve pot">drug jar/salve pot</option>
            <option  value="flower pot">flower pot</option>
            <option  value="gaming piece">gaming piece</option>
            <option  value="griddle">griddle</option>
            <option  value="inkwell">inkwell</option>
            <option  value="jar">jar</option>
            <option  value="jar mustard">jar mustard</option>
            <option  value="jug">jug</option>
            <option  value="kiln furniture">kiln furniture</option>
            <option  value="lid">lid</option>
            <option  value="milk pan">milk pan</option>
            <option  value="mold jelly">mold jelly</option>
            <option  value="mug/can">mug/can</option>
            <option  value="not applicable">not applicable</option>
            <option  value="not mended" id="change_not_mend">not mended</option>
            <option  value="not recorded" id="change_not_record">not recorded</option>
            <option  value="patty pan">patty pan</option>
            <option  value="pipkin">pipkin</option>
            <option  value="pitcher/ewer">pitcher/ewer</option>
            <option  value="plate">plate</option>
            <option  value="platter">platter</option>
            <option  value="porringer">porringer</option>
            <option  value="pot/butter pot">pot/butter pot</option>
            <option  value="saucer">saucer</option>
            <option  value="sea kale pot">sea kale pot</option>
            <option  value="serving dish misc">serving dish misc</option>
            <option  value="storage jar">storage jar</option>
            <option  value="storage vessel">storage vessel</option>
            <option  value="strainer">strainer</option>
            <option  value="tankard">tankard</option>
            <option  value="tea caddy">tea caddy</option>
            <option  value="teabowl">teabowl</option>
            <option  value="teacup">teacup</option>
            <option  value="teapot">teapot</option>
            <option  value="tureen">tureen</option>
            <option  value="unid: tableware">unid: tableware</option>
            <option  value="unid:teware">unid:teware</option>
            <option  value="unid:utilitarian">unid:utilitarian</option>
            <option  value="unidentifable">unidentifable</option>
            <option  value="vegetable dish">vegetable dish</option>
            <option  value="water cooler">water cooler</option>

        </select>
        <div class="invalid-feedback">
            Must select mended form. 
        </div>
    </div><!--END COL-->


</div><!--END ROW-->