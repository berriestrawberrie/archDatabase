<?php

namespace App\Http\Controllers;

use App\Models\Glass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GlassController extends Controller
{
    //SAVE GLASS ARTIFACT
    public function saveGlass(Request $request)
    {
        $token = uniqid();
        $user = Auth::user()->id;

        //PROCESS THE FILE 
        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/glasses/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        //SAVE THE ARTIFACT TO THE DATABASE WITHOUT ARTIFACT ID
        Glass::create([
            'has_photo' => $request->input('has_photo'),
            'photo' => $filename,
            'entered_date' => $request->input('entered_date'),
            'collection' => $request->input('collection'),
            'notes' => $request->input('notes'),
            'entered_by' => Auth::user()->id,
            'completeness' => $request->input('completeness'),
            'artifact_count' => $request->input('artifact_count'),
            'material' => $request->input('material'),
            'glass_color' => $request->input('glass_color'),
            'vessel_category' => $request->input('vessel_category'),
            'manufacturing_technique' => $request->input('manufacturing_technique'),
            'mold_type' => $request->input('mold_type'),
            'mended' => $request->input('mended'),
            'form' => $request->input('form'),
            'post_manu_mod' => $request->input('post_manu_mod'),
            'solarized' => $request->input('solarized'),
            'weather_eroded' => $request->input('weather_eroded'),
            'pontil_mark' => $request->input('pontil_mark'),
            'burned' => $request->input('burned'),
            'conservation' => $request->input('conservation'),
            'decorative_technique' => $request->input('decorative_technique'),
            'stylistic_element' => $request->input('stylistic_element'),
            'bottle_element' => $request->input('bottle_element'),
            'element_shape' => $request->input('element_shape'),
            'element_manu_fact' => $request->input('element_manu_fact'),
            'element_treatment' => $request->input('element_treatment'),
            'stemware_body' => $request->input('stemware_body'),
            'stemware_foot' => $request->input('stemware_foot'),
            'applied_color' => $request->input('applied_color'),
            'stem_shape' => $request->input('stem_shape'),
            'glass_marks' => $request->input('glass_marks'),
            'mark_location' => $request->input('mark_location'),
            'stem_length' => $request->input('stem_length'),
            'container_height' => $request->input('container_height'),
            'sherd_thickness' => $request->input('sherd_thickness'),
            'sherd_size' => $request->input('sherd_size'),
            'sherd_weight' => $request->input('sherd_weight'),
            'mended_sherd_weight' => $request->input('mended_sherd_weight'),
            'rim_length' => $request->input('rim_length'),
            'rim_diameter' => $request->input('rim_diameter'),
            'mended_rim_diameter' => $request->input('mended_rim_diameter'),
            'base_length' => $request->input('base_length'),
            'base_diameter' => $request->input('base_diameter'),
            'mended_base_diameter' => $request->input('mended_base_diameter'),
            'collection_id' => $request->input('collection_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'Added By' => $request->input('added_by'),
            'token' => $token,
            'patination' => $request->input('patination'),
            'isValid' => 2,

        ]);

        return redirect(route('form.preview', ['token' => $token, 'user' => $user, 'artifact_type' => "glass"]));
    } //END OF SAVE GLASS

    //SUBMIT THE GLASS FORM FOR VALIDATION
    public function submitGlass(Request $request, $token)
    {
        //RETRIEVE THE RECORD
        $glass = Glass::where('token', $token)->get();

        //GENERATE THE ARTIFACT ID
        $digit_3 = str_pad($glass[0]["id"], 3, '0', STR_PAD_LEFT);
        $artifact_id = '31DV' . $glass[0]["collection_id"] . 'GL' . $digit_3;

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $glass[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($glass[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/glasses/' . $glass[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/glasses/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($glass[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/glasses/' . $glass[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH

        //REASSIGN THE glass PROPRETIES TO THE INPUTS
        Glass::where('token', $token)
            ->update([
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'entered_date' => $request->input('entered_date'),
                'artifact_id' => $artifact_id,
                'notes' => $request->input('notes'),
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'material' => $request->input('material'),
                'glass_color' => $request->input('glass_color'),
                'vessel_category' => $request->input('vessel_category'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'mold_type' => $request->input('mold_type'),
                'mended' => $request->input('mended'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'solarized' => $request->input('solarized'),
                'weather_eroded' => $request->input('weather_eroded'),
                'pontil_mark' => $request->input('pontil_mark'),
                'burned' => $request->input('burned'),
                'conservation' => $request->input('conservation'),
                'decorative_technique' => $request->input('decorative_technique'),
                'stylistic_element' => $request->input('stylistic_element'),
                'bottle_element' => $request->input('bottle_element'),
                'element_shape' => $request->input('element_shape'),
                'element_manu_fact' => $request->input('element_manu_fact'),
                'element_treatment' => $request->input('element_treatment'),
                'stemware_body' => $request->input('stemware_body'),
                'stemware_foot' => $request->input('stemware_foot'),
                'applied_color' => $request->input('applied_color'),
                'stem_shape' => $request->input('stem_shape'),
                'glass_marks' => $request->input('glass_marks'),
                'mark_location' => $request->input('mark_location'),
                'stem_length' => $request->input('stem_length'),
                'container_height' => $request->input('container_height'),
                'sherd_thickness' => $request->input('sherd_thickness'),
                'sherd_size' => $request->input('sherd_size'),
                'sherd_weight' => $request->input('sherd_weight'),
                'mended_sherd_weight' => $request->input('mended_sherd_weight'),
                'rim_length' => $request->input('rim_length'),
                'rim_diameter' => $request->input('rim_diameter'),
                'mended_rim_diameter' => $request->input('mended_rim_diameter'),
                'base_length' => $request->input('base_length'),
                'base_diameter' => $request->input('base_diameter'),
                'mended_base_diameter' => $request->input('mended_base_diameter'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'patination' => $request->input('patination'),
                'isValid' => 0,

            ]);

        return redirect(route('home'))
            ->with("success", "Successfully submitted glass artifact for validation");
    } //END OF SUBMIT GLASS

    //PROCESS THE GLASS PUBLISH FORM 
    public function validateGlass(Request $request, $artifact_id)
    {

        $glass = Glass::where('artifact_id', $artifact_id)->get();

        //VERIFY IT'S BEING SUBMITTED BY USER THAT CHECKEDOUT & STATUS IS READY FOR VALIDATION
        if (Auth::user()->id != $glass[0]["checkout_by"] || $glass[0]["isValid"] != 0) {

            return redirect(route('home'))
                ->with("verify.data", "Artifact checked out by another user you cannot validate it.");
        }

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $glass[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($glass[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/glasses/' . $glass[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/glasses/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($glass[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/glasses/' . $glass[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH


        //REASSIGN THE glass PROPRETIES TO THE INPUTS
        Glass::where('artifact_id', $artifact_id)
            ->update([
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'entered_date' => $request->input('entered_date'),
                'notes' => $request->input('notes'),
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'material' => $request->input('material'),
                'glass_color' => $request->input('glass_color'),
                'vessel_category' => $request->input('vessel_category'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'mold_type' => $request->input('mold_type'),
                'mended' => $request->input('mended'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'solarized' => $request->input('solarized'),
                'weather_eroded' => $request->input('weather_eroded'),
                'pontil_mark' => $request->input('pontil_mark'),
                'burned' => $request->input('burned'),
                'conservation' => $request->input('conservation'),
                'decorative_technique' => $request->input('decorative_technique'),
                'stylistic_element' => $request->input('stylistic_element'),
                'bottle_element' => $request->input('bottle_element'),
                'element_shape' => $request->input('element_shape'),
                'element_manu_fact' => $request->input('element_manu_fact'),
                'element_treatment' => $request->input('element_treatment'),
                'stemware_body' => $request->input('stemware_body'),
                'stemware_foot' => $request->input('stemware_foot'),
                'applied_color' => $request->input('applied_color'),
                'stem_shape' => $request->input('stem_shape'),
                'glass_marks' => $request->input('glass_marks'),
                'mark_location' => $request->input('mark_location'),
                'stem_length' => $request->input('stem_length'),
                'container_height' => $request->input('container_height'),
                'sherd_thickness' => $request->input('sherd_thickness'),
                'sherd_size' => $request->input('sherd_size'),
                'sherd_weight' => $request->input('sherd_weight'),
                'mended_sherd_weight' => $request->input('mended_sherd_weight'),
                'rim_length' => $request->input('rim_length'),
                'rim_diameter' => $request->input('rim_diameter'),
                'mended_rim_diameter' => $request->input('mended_rim_diameter'),
                'base_length' => $request->input('base_length'),
                'base_diameter' => $request->input('base_diameter'),
                'mended_base_diameter' => $request->input('mended_base_diameter'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'patination' => $request->input('patination'),
                'isValid' => 1,
                'checkout_by' => Null,

            ]);


        return redirect(route('verify.data'))
            ->with("success", "glass validated and published");
    } //END OF VALIDATE FUNCTION


}
