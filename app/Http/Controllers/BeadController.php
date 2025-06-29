<?php

namespace App\Http\Controllers;

use App\Models\Bead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class BeadController extends Controller
{
    //SAVE THE BEAD FORM TO THE DATABASE
    public function saveBead(Request $request)
    {
        $token = uniqid();
        $user = Auth::user()->id;

        //PROCESS THE FILE 
        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/beads/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        //SAVE THE ARTIFACT TO THE DATABASE WITHOUT ARTIFACT ID
        Bead::create([
            'entered_by' => $user,
            'created_at' => $request->input('created_at'),
            'token' => $token,
            'start_date' => intval($request->start_date),
            'end_date' => intval($request->end_date),
            'conservation' => $request->input('conservation'),
            'Added By' => $request->input('added_by'),
            'completeness' => $request->input('completeness'),
            'artifact_count' => $request->input('artifact_count'),
            'collection' => $request->input('collection'),
            'collection_id' => $request->input('collection_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'notes' => $request->input('notes'),
            'material' => $request->input('material'),
            'manufacturing_technique' => $request->input('manufacturing_technique'),
            'bead_struct' => $request->input('bead_struct'),
            'bead_form' => $request->input('bead_form'),
            'has_photo' => $request->input('has_photo'),
            'photo' => $filename,
            'bead_shape' => $request->input('bead_shape'),
            'complex_shape' => $request->input('complex_shape'),
            'end_treatment' => $request->input('end_treatment'),
            'bead_color' => $request->input('bead_color'),
            'heat_treated' => $request->input('heat_treated'),
            'number_facets' => $request->input('number_facets'),
            'diaphaneity' => $request->input('diaphaneity'),
            'mended' => $request->input('mended'),
            'post_man_mod' => $request->input('post_man_mod'),
            'patination' => $request->input('patination'),
            'weather_erode' => $request->input('weather_erode'),
            'burned' => $request->input('burned'),
            'applied_color' => $request->input('applied_color'),
            'bead_decoration' => $request->input('bead_decoration'),
            'casing_layer' => $request->input('casing_layer'),
            'casing_color' => $request->input('casing_color'),
            'decoration_desc' => $request->input('decoration_desc'),
            'perforation_1' => $request->input('perforation_1'),
            'perforation_2' => $request->input('perforation_2'),
            'bead_length' => $request->input('bead_length'),
            'bead_width' => $request->input('bead_width'),
            'bead_height' => $request->input('bead_height'),
            'bead_weight' => $request->input('bead_weight'),


        ]);

        return redirect(route('form.preview', ['token' => $token, 'user' => $user, 'artifact_type' => "bead"]));
    } //END OF SAVE BEAD

    //SUBMIT THE BEAD FORM FOR VALIDATION
    public function submitBead(Request $request, $token)
    {
        //RETRIEVE THE RECORD
        $bead = Bead::where('token', $token)->get();

        //GENERATE THE ARTIFACT ID
        $digit_3 = str_pad($bead[0]["id"], 3, '0', STR_PAD_LEFT);
        $artifact_id = '31DV' . $bead[0]["collection_id"] . 'BE' . $digit_3;

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $bead[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($bead[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/beads/' . $bead[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/beads/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($bead[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/beads/' . $bead[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH


        //REASSIGN THE BEAD PROPRETIES TO THE INPUTS
        Bead::where('token', $token)
            ->update([
                'start_date' => intval($request->start_date),
                'end_date' => intval($request->end_date),
                'artifact_id' => $artifact_id,
                'isValid' => 0,
                'conservation' => $request->input('conservation'),
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'collection' => $request->input('collection'),
                'collection_id' => $request->input('collection_id'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'notes' => $request->input('notes'),
                'material' => $request->input('material'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'bead_struct' => $request->input('bead_struct'),
                'bead_form' => $request->input('bead_form'),
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'bead_shape' => $request->input('bead_shape'),
                'complex_shape' => $request->input('complex_shape'),
                'end_treatment' => $request->input('end_treatment'),
                'bead_color' => $request->input('bead_color'),
                'heat_treated' => $request->input('heat_treated'),
                'number_facets' => $request->input('number_facets'),
                'diaphaneity' => $request->input('diaphaneity'),
                'mended' => $request->input('mended'),
                'post_man_mod' => $request->input('post_man_mod'),
                'patination' => $request->input('patination'),
                'weather_erode' => $request->input('weather_erode'),
                'burned' => $request->input('burned'),
                'applied_color' => $request->input('applied_color'),
                'bead_decoration' => $request->input('bead_decoration'),
                'casing_layer' => $request->input('casing_layer'),
                'casing_color' => $request->input('casing_color'),
                'decoration_desc' => $request->input('decoration_desc'),
                'perforation_1' => $request->input('perforation_1'),
                'perforation_2' => $request->input('perforation_2'),
                'bead_length' => $request->input('bead_length'),
                'bead_width' => $request->input('bead_width'),
                'bead_height' => $request->input('bead_height'),
                'bead_weight' => $request->input('bead_weight'),
            ]);

        return redirect(route('home'))
            ->with("success", "Successfully submitted bead artifact for validation");
    } //END OF SUBMIT BEAD

    //PROCESS THE bead PUBLISH FORM 
    public function validateBead(Request $request, $artifact_id)
    {

        $bead = Bead::where('artifact_id', $artifact_id)->get();

        //VERIFY IT'S BEING SUBMITTED BY USER THAT CHECKEDOUT & STATUS IS READY FOR VALIDATION
        if (Auth::user()->id != $bead[0]["checkout_by"] || $bead[0]["isValid"] != 0) {

            return redirect(route('home'))
                ->with("verify.data", "Artifact checked out by another user you cannot validate it.");
        }

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $bead[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($bead[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/beads/' . $bead[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/beads/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($bead[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/beads/' . $bead[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH

        //REASSIGN THE bead PROPRETIES TO THE INPUTS
        Bead::where('artifact_id', $artifact_id)
            ->update([
                'start_date' => intval($request->start_date),
                'end_date' => intval($request->end_date),
                'conservation' => $request->input('conservation'),
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'notes' => $request->input('notes'),
                'material' => $request->input('material'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'bead_struct' => $request->input('bead_struct'),
                'bead_form' => $request->input('bead_form'),
                'has_photo' => $request->input('has_photo'),
                'bead_shape' => $request->input('bead_shape'),
                'complex_shape' => $request->input('complex_shape'),
                'end_treatment' => $request->input('end_treatment'),
                'bead_color' => $request->input('bead_color'),
                'heat_treated' => $request->input('heat_treated'),
                'number_facets' => $request->input('number_facets'),
                'diaphaneity' => $request->input('diaphaneity'),
                'mended' => $request->input('mended'),
                'post_man_mod' => $request->input('post_man_mod'),
                'patination' => $request->input('patination'),
                'weather_erode' => $request->input('weather_erode'),
                'burned' => $request->input('burned'),
                'applied_color' => $request->input('applied_color'),
                'bead_decoration' => $request->input('bead_decoration'),
                'casing_layer' => $request->input('casing_layer'),
                'casing_color' => $request->input('casing_color'),
                'decoration_desc' => $request->input('decoration_desc'),
                'perforation_1' => $request->input('perforation_1'),
                'perforation_2' => $request->input('perforation_2'),
                'bead_length' => $request->input('bead_length'),
                'bead_width' => $request->input('bead_width'),
                'bead_height' => $request->input('bead_height'),
                'bead_weight' => $request->input('bead_weight'),
                'isValid' => 1,
                'photo' => $filename,
                'checkout_by' => Null,

            ]);


        return redirect(route('verify.data'))
            ->with("success", "Bead validated and published");
    } //END OF VALIDATE FUNCTION    


}
