<?php

namespace App\Http\Controllers;

use App\Models\Ceramic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CeramicController extends Controller
{
    //

    //PROCESS THE CERAMIC FORM
    public function saveCeramic(Request $request)
    {

        //PROCESS THE FILE 
        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/ceramics/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        //CONFIGURE THE ARTIFACT ID
        if ($request->has('subset')) {
            $artifact_id = $request->preID . $request->artifact_id . $request->subset;
        } else {
            $artifact_id = $request->preID . $request->artifact_id;
        }

        Ceramic::create([
            'created_at' => $request->created_at,
            'entered_by' => Auth::user(),
            'artifact_count' => $request->artifact_count,
            'artifact_id' => $artifact_id,
            'collection' => $request->collection,
            'material' => $request->material,
            'manufacturing_technique' => $request->manufacturing_technique,
            'ware' => $request->ware,
            'vessel_category' => $request->vessel_category,
            'form' => $request->form,
            'mended_form' => $request->mended_form,
            'completeness' => $request->completeness,
            'paste_color' => $request->paste_color,
            'exterior_surface' => $request->exterior_surface,
            'exterior_color' => $request->exterior_color,
            'interior_surface' => $request->interior_surface,
            'interior_color' => $request->interior_color,
            'oxidized_vs_reduced_fabric' => $request->oxidized_vs_reduced_fabric,
            'evidence_of_burning' => $request->evidence_of_burning,
            'mended' => $request->mended,
            'post_manufacturing_mod' => $request->post_manufacturing_mod,
            'Added By' => $request->entered_by,
            'changed_by' => $request->changed_by,
            'change_date' => $request->change_date,
            'notes' => $request->notes,
            'interior_exterior' => $request->interior_exterior,
            'location' => $request->location,
            'decorative_technique' => $request->decorative_technique,
            'decoration_color' => $request->decoration_color,
            'stylistic_element' => $request->stylistic_element,
            'stylistic_element_number' => $request->stylistic_element_number,
            'motif' => $request->motif,
            'pattern_name' => $request->pattern_name,
            'pattern_notes' => $request->pattern_notes,
            'pattern_reference' => $request->pattern_reference,
            'genre' => $request->genre,
            'base_mark' => $request->base_mark,
            'base_mark_ref' => $request->base_mark_ref,
            'base_mark_color' => $request->base_mark_color,
            'colonoware' => $request->colonoware,
            'colono_rim_form' => $request->colono_rim_form,
            'colono_rim_angle' => $request->colono_rim_angle,
            'max_rim_width' => $request->max_rim_width,
            'colono_decoration_mode' => $request->colono_decoration_mode,
            'colono_base_form' => $request->colono_base_form,
            'colono_footring_form' => $request->colono_footring_form,
            'non_plastic_paste_inclusions' => $request->non_plastic_paste_inclusions,
            'total_paste_inclusion_density' => $request->total_paste_inclusion_density,
            'wear_location' => $request->wear_location,
            'ceramic_completeness' => $request->ceramic_completeness,
            'wear_pattern' => $request->wear_pattern,
            'sherd_thickness' => $request->sherd_thickness,
            'max_sherd_measurement' => $request->max_sherd_measurement,
            'sherd_weight' => $request->sherd_weight,
            'mended_sherd_weight' => $request->mended_sherd_weight,
            'rim_length' => $request->rim_length,
            'rim_diameter' => $request->rim_diameter,
            'mended_rim_diameter' => $request->mended_rim_diameter,
            'base_length' => $request->base_length,
            'base_diameter' => $request->base_diameter,
            'mended_base_diameter' => $request->mended_base_diameter,
            'has_photo' => $request->has_photo,
            'photo' => $filename,
        ]);

        return redirect(route('form.preview', ['artifact_id' => $artifact_id]));
    } //END OF CERAMIC

    //PROCESS THE CERAMIC PUBLISH FORM 
    public function submitCeramic(Request $request, $id)
    {

        $ceramic = Ceramic::where('artifact_id', $id)->get();
        //CONFIGURE THE ARTIFACT ID
        if ($request->has('subset')) {
            $artifact_id = $request->preID . $request->artifact_id . $request->subset;
        } else {
            $artifact_id = $request->preID . $request->artifact_id;
        }




        //CHECK IF NEW IMAGE SUBMITTED
        if ($request->has('photo')) {
            //DELETE THE OLD PHOTO
            File::delete($ceramic[0]["photo"]);
            //UPLOAD THE NEW PHOTO
            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();
            $path = 'uploads/ceramics/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
            $ceramic[0]["photo"] = $filename;
        } else {
            //USE THE SAME PHOTO OR KEEP NULL
            if ($request->has_photo == 0) {
                $filename = 'null.png';
            } else {
                $filename = $request->photo;
            }
        }

        //REASSIGN THE CERAMIC PROPRETIES TO THE INPUTS
        Ceramic::where('artifact_id', $id)
            ->update([
                'created_at' => $request->created_at,
                'artifact_count' => $request->artifact_count,
                'isValid' => 0,
                'collection' => $request->collection,
                'material' => $request->material,
                'manufacturing_technique' => $request->manufacturing_technique,
                'ware' => $request->ware,
                'vessel_category' => $request->vessel_category,
                'form' => $request->form,
                'mended_form' => $request->mended_form,
                'completeness' => $request->completeness,
                'paste_color' => $request->paste_color,
                'exterior_surface' => $request->exterior_surface,
                'exterior_color' => $request->exterior_color,
                'interior_surface' => $request->interior_surface,
                'interior_color' => $request->interior_color,
                'oxidized_vs_reduced_fabric' => $request->oxidized_vs_reduced_fabric,
                'evidence_of_burning' => $request->evidence_of_burning,
                'mended' => $request->mended,
                'post_manufacturing_mod' => $request->post_manufacturing_mod,
                'Added By' => $request->entered_by,
                'changed_by' => $request->changed_by,
                'change_date' => $request->change_date,
                'notes' => $request->notes,
                'interior_exterior' => $request->interior_exterior,
                'location' => $request->location,
                'decorative_technique' => $request->decorative_technique,
                'decoration_color' => $request->decoration_color,
                'stylistic_element' => $request->stylistic_element,
                'stylistic_element_number' => $request->stylistic_element_number,
                'motif' => $request->motif,
                'pattern_name' => $request->pattern_name,
                'pattern_notes' => $request->pattern_notes,
                'pattern_reference' => $request->pattern_reference,
                'genre' => $request->genre,
                'base_mark' => $request->base_mark,
                'base_mark_ref' => $request->base_mark_ref,
                'base_mark_color' => $request->base_mark_color,
                'colonoware' => $request->colonoware,
                'colono_rim_form' => $request->colono_rim_form,
                'colono_rim_angle' => $request->colono_rim_angle,
                'max_rim_width' => $request->max_rim_width,
                'colono_decoration_mode' => $request->colono_decoration_mode,
                'colono_base_form' => $request->colono_base_form,
                'colono_footring_form' => $request->colono_footring_form,
                'non_plastic_paste_inclusions' => $request->non_plastic_paste_inclusions,
                'total_paste_inclusion_density' => $request->total_paste_inclusion_density,
                'wear_location' => $request->wear_location,
                'ceramic_completeness' => $request->ceramic_completeness,
                'wear_pattern' => $request->wear_pattern,
                'sherd_thickness' => $request->sherd_thickness,
                'max_sherd_measurement' => $request->max_sherd_measurement,
                'sherd_weight' => $request->sherd_weight,
                'mended_sherd_weight' => $request->mended_sherd_weight,
                'rim_length' => $request->rim_length,
                'rim_diameter' => $request->rim_diameter,
                'mended_rim_diameter' => $request->mended_rim_diameter,
                'base_length' => $request->base_length,
                'base_diameter' => $request->base_diameter,
                'mended_base_diameter' => $request->mended_base_diameter,
                'has_photo' => $request->has_photo,
                'photo' => $filename,
                'checkout_by' => Null,

            ]);



        return redirect(route('home'))
            ->with("success", "Successfully added ceramic artifact");
    } //END OF VALIDATE FUNCTION


    //PROCESS THE CERAMIC PUBLISH FORM 
    public function validateCeramic(Request $request, $id)
    {
        $ceramic = Ceramic::where('artifact_id', $id)->get();
        //CONFIGURE THE ARTIFACT ID
        if ($request->has('subset')) {
            $artifact_id = $request->preID . $request->artifact_id . $request->subset;
        } else {
            $artifact_id = $request->preID . $request->artifact_id;
        }




        //CHECK IF NEW IMAGE SUBMITTED
        if ($request->has('photo')) {
            //DELETE THE OLD PHOTO
            File::delete($ceramic[0]["photo"]);
            //UPLOAD THE NEW PHOTO
            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();
            $path = 'uploads/ceramics/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
            $ceramic[0]["photo"] = $filename;
        } else {
            //USE THE SAME PHOTO OR KEEP NULL
            if ($request->has_photo == 0) {
                $filename = 'null.png';
            } else {
                $filename = $request->photo;
            }
        }

        //REASSIGN THE CERAMIC PROPRETIES TO THE INPUTS
        Ceramic::where('artifact_id', $id)
            ->update([
                'created_at' => $request->created_at,
                'artifact_count' => $request->artifact_count,
                //SET TO CONDITIONALLY
                'isValid' => 1,
                'collection' => $request->collection,
                'material' => $request->material,
                'manufacturing_technique' => $request->manufacturing_technique,
                'ware' => $request->ware,
                'vessel_category' => $request->vessel_category,
                'form' => $request->form,
                'mended_form' => $request->mended_form,
                'completeness' => $request->completeness,
                'paste_color' => $request->paste_color,
                'exterior_surface' => $request->exterior_surface,
                'exterior_color' => $request->exterior_color,
                'interior_surface' => $request->interior_surface,
                'interior_color' => $request->interior_color,
                'oxidized_vs_reduced_fabric' => $request->oxidized_vs_reduced_fabric,
                'evidence_of_burning' => $request->evidence_of_burning,
                'mended' => $request->mended,
                'post_manufacturing_mod' => $request->post_manufacturing_mod,
                'Added By' => $request->entered_by,
                'changed_by' => $request->changed_by,
                'change_date' => $request->change_date,
                'notes' => $request->notes,
                'interior_exterior' => $request->interior_exterior,
                'location' => $request->location,
                'decorative_technique' => $request->decorative_technique,
                'decoration_color' => $request->decoration_color,
                'stylistic_element' => $request->stylistic_element,
                'stylistic_element_number' => $request->stylistic_element_number,
                'motif' => $request->motif,
                'pattern_name' => $request->pattern_name,
                'pattern_notes' => $request->pattern_notes,
                'pattern_reference' => $request->pattern_reference,
                'genre' => $request->genre,
                'base_mark' => $request->base_mark,
                'base_mark_ref' => $request->base_mark_ref,
                'base_mark_color' => $request->base_mark_color,
                'colonoware' => $request->colonoware,
                'colono_rim_form' => $request->colono_rim_form,
                'colono_rim_angle' => $request->colono_rim_angle,
                'max_rim_width' => $request->max_rim_width,
                'colono_decoration_mode' => $request->colono_decoration_mode,
                'colono_base_form' => $request->colono_base_form,
                'colono_footring_form' => $request->colono_footring_form,
                'non_plastic_paste_inclusions' => $request->non_plastic_paste_inclusions,
                'total_paste_inclusion_density' => $request->total_paste_inclusion_density,
                'wear_location' => $request->wear_location,
                'ceramic_completeness' => $request->ceramic_completeness,
                'wear_pattern' => $request->wear_pattern,
                'sherd_thickness' => $request->sherd_thickness,
                'max_sherd_measurement' => $request->max_sherd_measurement,
                'sherd_weight' => $request->sherd_weight,
                'mended_sherd_weight' => $request->mended_sherd_weight,
                'rim_length' => $request->rim_length,
                'rim_diameter' => $request->rim_diameter,
                'mended_rim_diameter' => $request->mended_rim_diameter,
                'base_length' => $request->base_length,
                'base_diameter' => $request->base_diameter,
                'mended_base_diameter' => $request->mended_base_diameter,
                'has_photo' => $request->has_photo,
                'photo' => $filename,
                'checkout_by' => Null,

            ]);


        return redirect(route('verify.data'))
            ->with("success", "Ceramic validated and published");
    } //END OF VALIDATE FUNCTION

}
