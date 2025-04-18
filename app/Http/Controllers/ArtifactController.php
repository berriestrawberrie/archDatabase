<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use App\Models\Ceramic;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtifactController extends Controller
{
    //COLLECTION & ARTIFACT SELECTION PAGE 
    public function typeSelect()
    {
        $collections = Collection::all();
        $art_types = [];
        for ($i = 0; $i < count($collections); $i++) {
            $art_types[$i] = explode(",", $collections[$i]["artifact_type"]);
        }

        return view('typeselects', compact('collections', 'art_types'));
    }

    //ROUTE TO COLLECTION & ARTIFACT SPECIFIC FORM
    public function getForm($collection, $art_type)
    {
        $collections = Collection::where('id', $collection)->get();

        $artifacts = Ceramic::all();



        return view('forms.' . $art_type, compact('collections', 'artifacts'));
    }

    //VIEW A SINGLE ITEM 
    public function singleItem($id)
    {

        $artifact = Ceramic::where('id', $id)->get();

        return view('singleitem', compact('artifact'));
    }

    //PROCESS THE CERAMIC FORM
    public function sumbitCeramic(Request $request)
    {


        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/ceramics/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = null;
        }

        Ceramic::create([
            'created_at' => $request->created_at,
            'artifact_count' => $request->artifact_count,
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
            'photo' => $path . $filename,
        ]);

        return redirect(route('home'))
            ->with("success", "Successfully added ceramic artifact");
    } //END OF CERAMIC

    //PROCESS THE CERAMIC PUBLISH FORM 
    public function validateCeramic(Request $request, $id)
    {
        $ceramic = Ceramic::find($id);

        //CHECK IF NEW IMAGE SUBMITTED
        if ($request->has('photo')) {
            //DELETE THE OLD PHOTO
            File::delete($ceramic->photo);
            //UPLOAD THE NEW PHOTO
            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();
            $path = 'uploads/ceramics/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
            $ceramic->photo = $filename;
        } else {
            //USE THE SAME PHOTO OR KEEP NULL
            if ($request->has_photo == 0) {
                $filename = null;
            } else {
                $filename = $ceramic->photo;
            }
        }

        //REASSIGN THE CERAMIC PROPRETIES TO THE INPUTS
        $ceramic->updated_at = $request->updated_at;
        $ceramic->artifact_id = $request->artifact_id;
        $ceramic->artifact_count = $request->artifact_count;
        $ceramic->material = $request->material;
        $ceramic->manufacturing_technique = $request->manufacturing_technique;
        $ceramic->ware = $request->ware;
        $ceramic->vessel_category = $request->vessel_category;
        $ceramic->form = $request->form;
        $ceramic->mended_form = $request->mended_form;
        $ceramic->completeness = $request->completeness;
        $ceramic->paste_color = $request->paste_color;
        $ceramic->exterior_surface = $request->exterior_surface;
        $ceramic->exterior_color = $request->exterior_color;
        $ceramic->interior_surface = $request->interior_surface;
        $ceramic->interior_color = $request->interior_color;
        $ceramic->oxidized_vs_reduced_fabric = $request->oxidized_vs_reduced_fabric;
        $ceramic->evidence_of_burning = $request->evidence_of_burning;
        $ceramic->mended = $request->mended;
        $ceramic->post_manufacturing_mod = $request->post_manufacturing_mod;
        $ceramic->changed_by = $request->checkout_by;
        $ceramic->checkout_by = Null;
        $ceramic->updated_at = $request->updated_at;
        $ceramic->notes = $request->notes;
        $ceramic->interior_exterior = $request->interior_exterior;
        $ceramic->location = $request->location;
        $ceramic->decorative_technique = $request->decorative_technique;
        $ceramic->decoration_color = $request->decoration_color;
        $ceramic->stylistic_element = $request->stylistic_element;
        $ceramic->stylistic_element_number = $request->stylistic_element_number;
        $ceramic->motif = $request->motif;
        $ceramic->pattern_name = $request->pattern_name;
        $ceramic->pattern_notes = $request->pattern_notes;
        $ceramic->pattern_reference = $request->pattern_reference;
        $ceramic->genre = $request->genre;
        $ceramic->base_mark = $request->base_mark;
        $ceramic->base_mark_ref = $request->base_mark_ref;
        $ceramic->base_mark_color = $request->base_mark_color;
        $ceramic->colonoware = $request->colonoware;
        $ceramic->colono_rim_form = $request->colono_rim_form;
        $ceramic->colono_rim_angle = $request->colono_rim_angle;
        $ceramic->max_rim_width = $request->max_rim_width;
        $ceramic->colono_decoration_mode = $request->colono_decoration_mode;
        $ceramic->colono_base_form = $request->colono_base_form;
        $ceramic->colono_footring_form = $request->colono_footring_form;
        $ceramic->non_plastic_paste_inclusions = $request->non_plastic_paste_inclusions;
        $ceramic->total_paste_inclusion_density = $request->total_paste_inclusion_density;
        $ceramic->wear_location = $request->wear_location;
        $ceramic->ceramic_completeness = $request->ceramic_completeness;
        $ceramic->wear_pattern = $request->wear_pattern;
        $ceramic->sherd_thickness = $request->sherd_thickness;
        $ceramic->max_sherd_measurement = $request->max_sherd_measurement;
        $ceramic->sherd_weight = $request->sherd_weight;
        $ceramic->mended_sherd_weight = $request->mended_sherd_weight;
        $ceramic->rim_length = $request->rim_length;
        $ceramic->rim_diameter = $request->rim_diameter;
        $ceramic->mended_rim_diameter = $request->mended_rim_diameter;
        $ceramic->base_length = $request->base_length;
        $ceramic->base_diameter = $request->base_diameter;
        $ceramic->mended_base_diameter = $request->mended_base_diameter;
        $ceramic->has_photo = $request->has_photo;
        $ceramic->photo = $filename;
        $ceramic->isValid = 1;

        //SAVE IT
        $ceramic->save();

        return redirect(route('verify.data'))
            ->with("success", "Ceramic validated and published");
    } //END OF VALIDATE FUNCTION
}
