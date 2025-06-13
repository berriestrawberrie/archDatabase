<?php

namespace App\Http\Controllers;

use App\Models\Button;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ButtonController extends Controller
{
    //SAVE THE BUCKLE FORM TO THE DATABASE
    public function saveButton(Request $request)
    {
        $token = uniqid();
        $user = Auth::user()->id;

        //PROCESS THE FILE 
        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/buttons/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        //SAVE THE ARTIFACT TO THE DATABASE WITHOUT ARTIFACT ID
        Button::create([
            'has_photo' => $request->input('has_photo'),
            'photo' => $filename,
            'collection' => $request->input('collection'),
            'notes' => $request->input('notes'),
            'isValid' => 2,
            'entered_by' => Auth::user()->id,
            'created_at' => $request->input('created_at'),
            'completeness' => $request->input('completeness'),
            'artifact_count' => $request->input('artifact_count'),
            'material' => $request->input('material'),
            'button_type' => $request->input('button_type'),
            'button_shape' => $request->input('button_shape'),
            'manufacturing_technique' => $request->input('manufacturing_technique'),
            'button_color' => $request->input('button_color'),
            'eye' => $request->input('eye'),
            'shank_style' => $request->input('shank_style'),
            'metal_color' => $request->input('metal_color'),
            'post_manu_mod' => $request->input('post_manu_mod'),
            'back_stamp' => $request->input('back_stamp'),
            'burned' => $request->input('burned'),
            'conservation' => $request->input('conservation'),
            'inlay_material' => $request->input('inlay_material'),
            'decorative_color' => $request->input('decorative_color'),
            'decorative_technique' => $request->input('decorative_technique'),
            'decorative_motif' => $request->input('decorative_motif'),
            'shank_material' => $request->input('shank_material'),
            'shank_condition' => $request->input('shank_condition'),
            'face_material' => $request->input('face_material'),
            'face_manu_tech' => $request->input('face_manu_tech'),
            'button_join' => $request->input('button_join'),
            'button_length' => $request->input('button_length'),
            'button_diameter' => $request->input('button_diameter'),
            'button_width' => $request->input('button_width'),
            'button_height' => $request->input('button_height'),
            'button_weight' => $request->input('button_weight'),
            'token' => $token,
            'collection_id' => $request->input('collection_id'),
            'Added By' => $request->input('added_by'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect(route('form.preview', ['token' => $token, 'user' => $user, 'artifact_type' => "button"]));
    } //END OF SAVE BUCKLE

    //SUBMIT THE BUTTON FORM FOR VALIDATION
    public function submitButton(Request $request, $token)
    {
        //RETRIEVE THE RECORD
        $button = Button::where('token', $token)->get();

        //GENERATE THE ARTIFACT ID
        $digit_3 = str_pad($button[0]["id"], 3, '0', STR_PAD_LEFT);
        $artifact_id = '31DV' . $button[0]["collection_id"] . 'BN' . $digit_3;

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $button[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($button[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/buttons/' . $button[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/buttons/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($button[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/buttons/' . $button[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH

        //REASSIGN THE button PROPRETIES TO THE INPUTS
        Button::where('token', $token)
            ->update([
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'artifact_id' => $artifact_id,
                'notes' => $request->input('notes'),
                'isValid' => 0,
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'material' => $request->input('material'),
                'button_type' => $request->input('button_type'),
                'button_shape' => $request->input('button_shape'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'button_color' => $request->input('button_color'),
                'eye' => $request->input('eye'),
                'shank_style' => $request->input('shank_style'),
                'metal_color' => $request->input('metal_color'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'back_stamp' => $request->input('back_stamp'),
                'burned' => $request->input('burned'),
                'conservation' => $request->input('conservation'),
                'inlay_material' => $request->input('inlay_material'),
                'decorative_color' => $request->input('decorative_color'),
                'decorative_technique' => $request->input('decorative_technique'),
                'decorative_motif' => $request->input('decorative_motif'),
                'shank_material' => $request->input('shank_material'),
                'shank_condition' => $request->input('shank_condition'),
                'face_material' => $request->input('face_material'),
                'face_manu_tech' => $request->input('face_manu_tech'),
                'button_join' => $request->input('button_join'),
                'button_length' => $request->input('button_length'),
                'button_diameter' => $request->input('button_diameter'),
                'button_width' => $request->input('button_width'),
                'button_height' => $request->input('button_height'),
                'button_weight' => $request->input('button_weight'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
            ]);

        return redirect(route('home'))
            ->with("success", "Successfully submitted button artifact for validation");
    } //END OF SUBMIT BUTTON

    //PROCESS THE CERAMIC PUBLISH FORM 
    public function validateButton(Request $request, $artifact_id)
    {

        $button = Button::where('artifact_id', $artifact_id)->get();

        //VERIFY IT'S BEING SUBMITTED BY USER THAT CHECKEDOUT & STATUS IS READY FOR VALIDATION
        if (Auth::user()->id != $button[0]["checkout_by"] || $button[0]["isValid"] != 0) {

            return redirect(route('home'))
                ->with("verify.data", "Artifact checked out by another user you cannot validate it.");
        }

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $button[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($button[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/buttons/' . $button[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/buttons/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($button[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/buttons/' . $button[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH


        //REASSIGN THE button PROPRETIES TO THE INPUTS
        Button::where('artifact_id', $artifact_id)
            ->update([
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'notes' => $request->input('notes'),
                'isValid' => 1,
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'material' => $request->input('material'),
                'button_type' => $request->input('button_type'),
                'button_shape' => $request->input('button_shape'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'button_color' => $request->input('button_color'),
                'eye' => $request->input('eye'),
                'shank_style' => $request->input('shank_style'),
                'metal_color' => $request->input('metal_color'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'back_stamp' => $request->input('back_stamp'),
                'burned' => $request->input('burned'),
                'conservation' => $request->input('conservation'),
                'inlay_material' => $request->input('inlay_material'),
                'decorative_color' => $request->input('decorative_color'),
                'decorative_technique' => $request->input('decorative_technique'),
                'decorative_motif' => $request->input('decorative_motif'),
                'shank_material' => $request->input('shank_material'),
                'shank_condition' => $request->input('shank_condition'),
                'face_material' => $request->input('face_material'),
                'face_manu_tech' => $request->input('face_manu_tech'),
                'button_join' => $request->input('button_join'),
                'button_length' => $request->input('button_length'),
                'button_diameter' => $request->input('button_diameter'),
                'button_width' => $request->input('button_width'),
                'button_height' => $request->input('button_height'),
                'button_weight' => $request->input('button_weight'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'checkout_by' => null,

            ]);


        return redirect(route('verify.data'))
            ->with("success", "Button validated and published");
    } //END OF VALIDATE FUNCTION

}
