<?php

namespace App\Http\Controllers;

use App\Models\BonesI;
use App\Models\BonesII;
use Illuminate\Http\Request;

class BoneController extends Controller
{
    //

    //SUBMIT THE BONE FORM
    public function submitBone(Request $request)
    {
        $validated = $request->validate([
            'provenience' => 'required',
            'entered_by' => 'required',
            'created_at' => 'required',
            'designated_id' => 'required',
            'collection' => 'required'
        ]);


        if ($request->has('file')) {

            $file = $request->file('file');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/bones/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        if ($validated) {
            BonesI::create([
                'entered_by' => $request->entered_by,
                'entered_date' => $request->entered_date,
                'notes' => $request->notes,
                'has_file' => $request->has_file,
                'provenience' => $request->provenience,
                'designated_id' => $request->designated_id,
                'front_cranial_left' => $request->front_cranial_left,
                'front_cranial_right' => $request->front_cranial_right,
                'parietal_left' => $request->parietal_left,
                'parietal_right' => $request->parietal_right,
                'occiptial_left' => $request->occiptial_left,
                'occiptial_right' => $request->occiptial_right,
                'temporal_left' => $request->temporal_left,
                'temporal_right' => $request->temporal_right,
                'tmj_left' => $request->tmj_left,
                'tmj_right' => $request->tmj_right,
                'mandible_left' => $request->mandible_left,
                'mandible_right' => $request->mandible_right,
                'zygomatic_left' => $request->zygomatic_left,
                'zygomatic_right' => $request->zygomatic_right,
                'maxilla_left' => $request->maxilla_left,
                'maxilla_right' => $request->maxilla_right,
                'nasal_left' => $request->nasal_left,
                'nasal_right' => $request->nasal_right,
                'lacrimal_left' => $request->lacrimal_left,
                'lacrimal_right' => $request->lacrimal_right,
                'inc_left' => $request->inc_left,
                'inc_right' => $request->inc_right,
                'palatine_left' => $request->palatine_left,
                'palatine_right' => $request->palatine_right,
                'sphenoid_left' => $request->sphenoid_left,
                'sphenoid_right' => $request->sphenoid_right,
                'ethmoid' => $request->ethmoid,
                'vomer' => $request->vomer,
                'hyoid' => $request->hyoid,
                'thyroidcryoid' => $request->thyroidcryoid,
                'ossicles' => $request->ossicles,
                'unidentified_cranial' => $request->unidentified_cranial,
                'incisors_number' => $request->incisors_number,
                'incisors' => $request->incisors,
                'canines_number' => $request->canines_number,
                'canines' => $request->canines,
                'premolars_number' => $request->premolars_number,
                'premolars' => $request->premolars,
                'molars_number' => $request->molars_number,
                'molars' => $request->molars,
                'unidentified_teeth' => $request->unidentified_teeth,
                'cervical_1' => $request->cervical_1,
                'cervical_2' => $request->cervical_2,
                'cervical_36_num' => $request->cervical_36_num,
                'cervical_36' => $request->cervical_36,
                'cervical_7' => $request->cervical_7,
                'thoracic_19_num' => $request->thoracic_19_num,
                'thoracic_19' => $request->thoracic_19,
                'thoracic_10' => $request->thoracic_10,
                'thoracic_11' => $request->thoracic_11,
                'thoracic_12' => $request->thoracic_12,
                'lumbar_14_num' => $request->lumbar_14_num,
                'lumbar_14' => $request->lumbar_14,
                'lumbar_5' => $request->lumbar_5,
                'sacrum_num' => $request->sacrum_num,
                'sacrum' => $request->sacrum,
                'coccyx_num' => $request->coccyx_num,
                'coccyx' => $request->coccyx,
                'manubrium' => $request->manubrium,
                'body' => $request->body,
                'xiphoid' => $request->xiphoid,
                'left_ribs_num' => $request->left_ribs_num,
                'left_ribs' => $request->left_ribs,
                'right_ribs_num' => $request->right_ribs_num,
                'right_ribs' => $request->right_ribs,
                'unidentified_axial' => $request->unidentified_axial,
                'scapula_left' => $request->scapula_left,
                'scapula_right' => $request->scapula_right,
                'glenoid_left' => $request->glenoid_left,
                'glenoid_right' => $request->glenoid_right,
                'clavicle_left' => $request->clavicle_left,
                'clavicle_right' => $request->clavicle_right,
                'med_epi_left' => $request->med_epi_left,
                'med_epi_right' => $request->med_epi_right,
                'ilium_left' => $request->ilium_left,
                'ilium_right' => $request->ilium_right,
                'auricular_left' => $request->auricular_left,
                'auricular_right' => $request->auricular_right,
                'pubis_left' => $request->pubis_left,
                'pubis_right' => $request->pubis_right,
                'symphysis_left' => $request->symphysis_left,
                'symphysis_right' => $request->symphysis_right,
                'ischium_left' => $request->ischium_left,
                'ischium_right' => $request->ischium_right,
                'acetabulum_left' => $request->acetabulum_left,
                'acetabulum_right' => $request->acetabulum_right,
                'patelia_left' => $request->patelia_left,
                'patelia_right' => $request->patelia_right,
                'unidentified_append' => $request->unidentified_append,
                'file' => $filename

            ]);

            BonesII::create([
                'calcaneus' => $request->calcaneus,
                'capitate' => $request->capitate,
                'cuboid' => $request->cuboid,
                'distPhalanges' => $request->distPhalanges,
                'distPhalanges2' => $request->distPhalanges2,
                'femur_dist' => $request->femur_dist,
                'femur_epid' => $request->femur_epid,
                'femur_epip' => $request->femur_epip,
                'femur_mid' => $request->femur_mid,
                'femur_prox' => $request->femur_prox,
                'fibula_dist' => $request->fibula_dist,
                'fibula_epid' => $request->fibula_epid,
                'fibula_epip' => $request->fibula_epip,
                'fibula_mid' => $request->fibula_mid,
                'fibula_prox' => $request->fibula_prox,
                'hamate' => $request->hamate,
                'humerus_dist' => $request->humerus_dist,
                'humerus_epid' => $request->humerus_epid,
                'humerus_epip' => $request->humerus_epip,
                'humerus_mid' => $request->humerus_mid,
                'humerus_prox' => $request->humerus_prox,
                'interCuneiform' => $request->interCuneiform,
                'latCuneiform' => $request->latCuneiform,
                'lunate' => $request->lunate,
                'medCuneiform' => $request->medCuneiform,
                'metacarpals2' => $request->metacarpals2,
                'metatarsals' => $request->metatarsals,
                'midPhalanges' => $request->midPhalanges,
                'midPhalanges2' => $request->midPhalanges2,
                'navicular' => $request->navicular,
                'pisiform' => $request->pisiform,
                'proxPhalanges' => $request->proxPhalanges,
                'proxPhalanges2' => $request->proxPhalanges2,
                'radius_dist' => $request->radius_dist,
                'radius_epid' => $request->radius_epid,
                'radius_epip' => $request->radius_epip,
                'radius_mid' => $request->radius_mid,
                'radius_prox' => $request->radius_prox,
                'rfemur_dist' => $request->rfemur_dist,
                'rfemur_epid' => $request->rfemur_epid,
                'rfemur_epip' => $request->rfemur_epip,
                'rfemur_mid' => $request->rfemur_mid,
                'rfemur_prox' => $request->rfemur_prox,
                'rfibula_dist' => $request->rfibula_dist,
                'rfibula_epid' => $request->rfibula_epid,
                'rfibula_epip' => $request->rfibula_epip,
                'rfibula_mid' => $request->rfibula_mid,
                'rfibula_prox' => $request->rfibula_prox,
                'rhumerus_dist' => $request->rhumerus_dist,
                'rhumerus_epid' => $request->rhumerus_epid,
                'rhumerus_epip' => $request->rhumerus_epip,
                'rhumerus_mid' => $request->rhumerus_mid,
                'rhumerus_prox' => $request->rhumerus_prox,
                'rradius_dist' => $request->rradius_dist,
                'rradius_epid' => $request->rradius_epid,
                'rradius_epip' => $request->rradius_epip,
                'rradius_mid' => $request->rradius_mid,
                'rradius_prox' => $request->rradius_prox,
                'rtibia_dist' => $request->rtibia_dist,
                'rtibia_epid' => $request->rtibia_epid,
                'rtibia_epip' => $request->rtibia_epip,
                'rtibia_mid' => $request->rtibia_mid,
                'rtibia_prox' => $request->rtibia_prox,
                'rulna_dist' => $request->rulna_dist,
                'rulna_epid' => $request->rulna_epid,
                'rulna_epip' => $request->rulna_epip,
                'rulna_mid' => $request->rulna_mid,
                'rulna_prox' => $request->rulna_prox,
                'scaphoid' => $request->scaphoid,
                'sesamoids' => $request->sesamoids,
                'sesamoids2' => $request->sesamoids2,
                'talus' => $request->talus,
                'tibia_dist' => $request->tibia_dist,
                'tibia_epid' => $request->tibia_epid,
                'tibia_epip' => $request->tibia_epip,
                'tibia_mid' => $request->tibia_mid,
                'tibia_prox' => $request->tibia_prox,
                'trapezium' => $request->trapezium,
                'trapezoid' => $request->trapezoid,
                'triquetral' => $request->triquetral,
                'ulna_dist' => $request->ulna_dist,
                'ulna_epid' => $request->ulna_epid,
                'ulna_epip' => $request->ulna_epip,
                'ulna_mid' => $request->ulna_mid,
                'ulna_prox' => $request->ulna_prox,
                'calcaneus_num' => $request->calcaneus_num,
                'capitate_num' => $request->capitate_num,
                'cuboid_num' => $request->cuboid_num,
                'distPhalanges_num' => $request->distPhalanges_num,
                'distPhalanges2_num' => $request->distPhalanges2_num,
                'hamate_num' => $request->hamate_num,
                'interCuneiform_num' => $request->interCuneiform_num,
                'latCuneiform_num' => $request->latCuneiform_num,
                'lunate_num' => $request->lunate_num,
                'medCuneiform_num' => $request->medCuneiform_num,
                'metacarpals2_num' => $request->metacarpals2_num,
                'metatarsals_num' => $request->metatarsals_num,
                'midPhalanges_num' => $request->midPhalanges_num,
                'midPhalanges2_num' => $request->midPhalanges2_num,
                'navicular_num' => $request->navicular_num,
                'pisiform_num' => $request->pisiform_num,
                'proxPhalanges_num' => $request->proxPhalanges_num,
                'proxPhalanges2_num' => $request->proxPhalanges2_num,
                'scaphoid_num' => $request->scaphoid_num,
                'sesamoids_num' => $request->sesamoids_num,
                'sesamoids2_num' => $request->sesamoids2_num,
                'talus_num' => $request->talus_num,
                'trapezium_num' => $request->trapezium_num,
                'trapezoid_num' => $request->trapezoid_num,
                'triquetral_num' => $request->triquetral_num,
                'unidentified_extermities' => $request->unidentified_extermities,

            ]);
            return back()
                ->with("success", "Successfully added bones artifact");
        } else {
            return redirect('/getForm/1/bone')
                ->with("erorr", "Required field is missing");
        }
    } //END OF SUBMIT FUNCTION
}
