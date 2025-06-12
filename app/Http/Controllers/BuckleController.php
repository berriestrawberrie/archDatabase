<?php

namespace App\Http\Controllers;

use App\Models\Buckle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuckleController extends Controller
{
    //SAVE THE BUCKLE FORM TO THE DATABASE
    public function saveBuckle(Request $request)
    {
        $token = uniqid();
        $user = Auth::user()->id;

        //PROCESS THE FILE 
        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/buckles/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        //SAVE THE ARTIFACT TO THE DATABASE WITHOUT ARTIFACT ID
        Buckle::create([
            'start_date' => $request->input('start_date'),
            'token' => $token,
            'end_date' => $request->input('end_date'),
            'Added By' => $request->input('added_by'),
            'entered_by' => $user,
            'created_at' => $request->input('created_at'),
            'completeness' => $request->input('completeness'),
            'artifact_count' => $request->input('artifact_count'),
            'buckle_type' => $request->input('buckle_type'),
            'frame_plating' => $request->input('frame_plating'),
            'manufacturing_technique' => $request->input('manufacturing_technique'),
            'buckle_form' => $request->input('buckle_form'),
            'element_type' => $request->input('element_type'),
            'shape' => $request->input('shape'),
            'post_manu_mod' => $request->input('post_manu_mod'),
            'buckle_part' => $request->input('buckle_part'),
            'buckle_width' => $request->input('buckle_width'),
            'buckle_length' => $request->input('buckle_length'),
            'decorative_technique' => $request->input('decorative_technique'),
            'mended' => $request->input('mended'),
            'decorative_motif' => $request->input('decorative_motif'),
            'burned' => $request->input('burned'),
            'marks' => $request->input('marks'),
            'mark_notes' => $request->input('mark_notes'),
            'material' => $request->input('material'),
            'obj_weight' => $request->input('obj_weight'),
            'conservation' => $request->input('conservation'),
            'has_photo' => $request->input('has_photo'),
            'photo' => $filename,
            'entered_date' => $request->input('entered_date'),
            'change_date' => $request->input('change_date'),
            'checkout_by' => $request->input('checkout_by'),
            'changed_by' => $request->input('changed_by'),
            'artifact_id' => $request->input('artifact_id'),
            'collection' => $request->input('collection'),
            'collection_id' => $request->input('collection_id'),
            'notes' => $request->input('notes'),
            'isValid' => 2,


        ]);

        return redirect(route('form.preview', ['token' => $token, 'user' => $user, 'artifact_type' => "buckle"]));
    } //END OF SAVE BUCKLE

    //SUBMIT THE BUCKLE FORM FOR VALIDATION
    public function submitBuckle(Request $request, $token)
    {
        //RETRIEVE THE RECORD
        $buckle = Buckle::where('token', $token)->get();

        //GENERATE THE ARTIFACT ID
        $digit_3 = str_pad($buckle[0]["id"], 3, '0', STR_PAD_LEFT);
        $artifact_id = '31DV' . $buckle[0]["collection_id"] . 'BU' . $digit_3;

        //PROCESS PHOTO SUBMISSION
        if ($request->has_photo === 1) {
            //KEEP THE SAME PHOTO
            $filename = $buckle[0]["photo"];
        } elseif ($request->has_photo === 2) {
            //DELETE THE OLD PHOTO
            $image = public_path('uploads/buckles/' . $buckle[0]["photo"]);
            if (file_exists($image)) {
                unlink($image);
            }
            //UPLOAD THE NEW PHOTO
            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();
            $path = 'uploads/buckles/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            //DELETE THE OLD PHOTO
            $image = public_path('uploads/buckles/' . $buckle[0]["photo"]);
            if (file_exists($image)) {
                unlink($image);
            }
            //USER REMOVED PHOTO
            $filename = 'null.png';
        } //END OF IF

        //REASSIGN THE buckle PROPRETIES TO THE INPUTS
        Buckle::where('token', $token)
            ->update([
                'start_date' => $request->input('start_date'),
                'isValid' => 0,
                'artifact_id' => $artifact_id,
                'end_date' => $request->input('end_date'),
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'buckle_type' => $request->input('buckle_type'),
                'frame_plating' => $request->input('frame_plating'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'buckle_form' => $request->input('buckle_form'),
                'element_type' => $request->input('element_type'),
                'shape' => $request->input('shape'),
                'material' => $request->input('material'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'buckle_part' => $request->input('buckle_part'),
                'buckle_width' => $request->input('buckle_width'),
                'buckle_length' => $request->input('buckle_length'),
                'decorative_technique' => $request->input('decorative_technique'),
                'mended' => $request->input('mended'),
                'decorative_motif' => $request->input('decorative_motif'),
                'burned' => $request->input('burned'),
                'marks' => $request->input('marks'),
                'mark_notes' => $request->input('mark_notes'),
                'obj_weight' => $request->input('obj_weight'),
                'conservation' => $request->input('conservation'),
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'entered_date' => $request->input('entered_date'),
                'change_date' => $request->input('change_date'),
                'checkout_by' => $request->input('checkout_by'),
                'changed_by' => $request->input('changed_by'),
                'notes' => $request->input('notes'),
            ]);

        return redirect(route('home'))
            ->with("success", "Successfully submitted buckle artifact for validation");
    } //END OF SUBMIT BUCKLE

    //PROCESS THE CERAMIC PUBLISH FORM 
    public function validateBuckle(Request $request, $artifact_id)
    {

        $buckle = Buckle::where('artifact_id', $artifact_id)->get();

        //VERIFY IT'S BEING SUBMITTED BY USER THAT CHECKEDOUT & STATUS IS READY FOR VALIDATION
        if (Auth::user()->id != $buckle[0]["checkout_by"] || $buckle[0]["isValid"] != 0) {

            return redirect(route('home'))
                ->with("verify.data", "Artifact checked out by another user you cannot validate it.");
        }

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $buckle[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($buckle[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/buckles/' . $buckle[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/buckles/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($buckle[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/buckles/' . $buckle[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH


        //REASSIGN THE buckle PROPRETIES TO THE INPUTS
        Buckle::where('artifact_id', $artifact_id)
            ->update([
                'start_date' => $request->input('start_date'),
                'artifact_id' => $artifact_id,
                'end_date' => $request->input('end_date'),
                'completeness' => $request->input('completeness'),
                'artifact_count' => $request->input('artifact_count'),
                'buckle_type' => $request->input('buckle_type'),
                'frame_plating' => $request->input('frame_plating'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'buckle_form' => $request->input('buckle_form'),
                'element_type' => $request->input('element_type'),
                'shape' => $request->input('shape'),
                'material' => $request->input('material'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'buckle_part' => $request->input('buckle_part'),
                'buckle_width' => $request->input('buckle_width'),
                'buckle_length' => $request->input('buckle_length'),
                'decorative_technique' => $request->input('decorative_technique'),
                'mended' => $request->input('mended'),
                'decorative_motif' => $request->input('decorative_motif'),
                'burned' => $request->input('burned'),
                'marks' => $request->input('marks'),
                'mark_notes' => $request->input('mark_notes'),
                'obj_weight' => $request->input('obj_weight'),
                'conservation' => $request->input('conservation'),
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'entered_date' => $request->input('entered_date'),
                'change_date' => $request->input('change_date'),
                'checkout_by' => $request->input('checkout_by'),
                'changed_by' => $request->input('changed_by'),
                'notes' => $request->input('notes'),
                'isValid' => 1,
                'checkout_by' => Null,

            ]);


        return redirect(route('verify.data'))
            ->with("success", "Buckle validated and published");
    } //END OF VALIDATE FUNCTION    
}
