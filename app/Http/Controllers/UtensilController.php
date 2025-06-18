<?php

namespace App\Http\Controllers;

use App\Models\Utensil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtensilController extends Controller
{
    //SAVE UTENSIL ARTIFACT
    public function saveUtensil(Request $request)
    {
        $token = uniqid();
        $user = Auth::user()->id;

        //PROCESS THE FILE 
        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension =  $file->getClientOriginalExtension();

            $path = 'uploads/utensils/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
            $filename = 'null.png';
        }

        //SAVE THE ARTIFACT TO THE DATABASE WITHOUT ARTIFACT ID
        Utensil::create([
            'has_photo' => $request->input('has_photo'),
            'photo' => $filename,
            'entered_date' => $request->input('entered_date'),
            'collection' => $request->input('collection'),
            'collection_id' => $request->input('collection_id'),
            'artifact_count' => $request->input('artifact_count'),
            'notes' => $request->input('notes'),
            'isValid' => 2,
            'entered_by' => $user,
            'completeness' => $request->input('completeness'),
            'material' => $request->input('material'),
            'utensil_form' => $request->input('utensil_form'),
            'plating' => $request->input('plating'),
            'handle_decoration' => $request->input('handle_decoration'),
            'manufacturing_technique' => $request->input('manufacturing_technique'),
            'spoon_rat' => $request->input('spoon_rat'),
            'mended' => $request->input('mended'),
            'post_manu_mod' => $request->input('post_manu_mod'),
            'burned' => $request->input('burned'),
            'shape' => $request->input('shape'),
            'fork_tines' => $request->input('fork_tines'),
            'part' => $request->input('part'),
            'mark' => $request->input('mark'),
            'conservation' => $request->input('conservation'),
            'object_length' => $request->input('object_length'),
            'object_width' => $request->input('object_width'),
            'object_weight' => $request->input('object_weight'),
            'token' => $token,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'Added By' => $request->input('added_by'),

        ]);

        return redirect(route('form.preview', ['token' => $token, 'user' => $user, 'artifact_type' => "utensil"]));
    } //END OF SAVE UTENSIL

    //SUBMIT THE UTENSIL FORM FOR VALIDATION
    public function submitUtensil(Request $request, $token)
    {
        //RETRIEVE THE RECORD
        $utensil = Utensil::where('token', $token)->get();

        //GENERATE THE ARTIFACT ID
        $digit_3 = str_pad($utensil[0]["id"], 3, '0', STR_PAD_LEFT);
        $artifact_id = '31DV' . $utensil[0]["collection_id"] . 'UT' . $digit_3;

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $utensil[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($utensil[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/utensils/' . $utensil[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/utensiles/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($utensil[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/utensils/' . $utensil[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH

        //REASSIGN THE utensil PROPRETIES TO THE INPUTS
        Utensil::where('token', $token)
            ->update([
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'artifact_count' => $request->input('artifact_count'),
                'notes' => $request->input('notes'),
                'isValid' => 0,
                'artifact_id' => $artifact_id,
                'completeness' => $request->input('completeness'),
                'material' => $request->input('material'),
                'utensil_form' => $request->input('utensil_form'),
                'plating' => $request->input('plating'),
                'handle_decoration' => $request->input('handle_decoration'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'spoon_rat' => $request->input('spoon_rat'),
                'mended' => $request->input('mended'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'burned' => $request->input('burned'),
                'shape' => $request->input('shape'),
                'fork_tines' => $request->input('fork_tines'),
                'part' => $request->input('part'),
                'mark' => $request->input('mark'),
                'conservation' => $request->input('conservation'),
                'object_length' => $request->input('object_length'),
                'object_width' => $request->input('object_width'),
                'object_weight' => $request->input('object_weight'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date')
            ]);

        return redirect(route('home'))
            ->with("success", "Successfully submitted utensil artifact for validation");
    } //END OF SUBMIT UTENSIL

    //PROCESS THE UTENSIL PUBLISH FORM 
    public function validateUtensil(Request $request, $artifact_id)
    {

        $utensil = Utensil::where('artifact_id', $artifact_id)->get();

        //VERIFY IT'S BEING SUBMITTED BY USER THAT CHECKEDOUT & STATUS IS READY FOR VALIDATION
        if (Auth::user()->id != $utensil[0]["checkout_by"] || $utensil[0]["isValid"] != 0) {

            return redirect(route('home'))
                ->with("verify.data", "Artifact checked out by another user you cannot validate it.");
        }

        //PROCESS PHOTO SUBMISSION
        switch ($request->has_photo) {
            //USER KEEPS PHOTO
            case "1":
                //KEEP THE SAME PHOTO
                $filename = $utensil[0]["photo"];

                break;
            //USER REPLACES PHOTO
            case "2":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($utensil[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/utensils/' . $utensil[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                //UPLOAD THE NEW PHOTO
                $file = $request->file('photo');
                $extension =  $file->getClientOriginalExtension();
                $path = 'uploads/utensils/';
                $filename = time() . '.' . $extension;
                $file->move($path, $filename);

                break;
            //USER REMOVES PHOTO
            case "0":
                //CHECK THAT THE PHOTO ISN'T PLACEHOLDER
                if ($utensil[0]["photo"] != "null.png") {
                    //DELETE THE OLD PHOTO
                    $image = public_path('uploads/utensils/' . $utensil[0]["photo"]);
                    if (file_exists($image)) {
                        unlink($image);
                    }
                }
                $filename = 'null.png';

                break;
            default:
                return back()->with('error', 'Issue processing photo submission');
        } //END OF SWITCH


        //REASSIGN THE utensil PROPRETIES TO THE INPUTS
        Utensil::where('artifact_id', $artifact_id)
            ->update([
                'has_photo' => $request->input('has_photo'),
                'photo' => $filename,
                'artifact_count' => $request->input('artifact_count'),
                'notes' => $request->input('notes'),
                'isValid' => 1,
                'completeness' => $request->input('completeness'),
                'material' => $request->input('material'),
                'utensil_form' => $request->input('utensil_form'),
                'plating' => $request->input('plating'),
                'handle_decoration' => $request->input('handle_decoration'),
                'manufacturing_technique' => $request->input('manufacturing_technique'),
                'spoon_rat' => $request->input('spoon_rat'),
                'mended' => $request->input('mended'),
                'post_manu_mod' => $request->input('post_manu_mod'),
                'burned' => $request->input('burned'),
                'shape' => $request->input('shape'),
                'fork_tines' => $request->input('fork_tines'),
                'part' => $request->input('part'),
                'mark' => $request->input('mark'),
                'conservation' => $request->input('conservation'),
                'object_length' => $request->input('object_length'),
                'object_width' => $request->input('object_width'),
                'object_weight' => $request->input('object_weight'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'checkout_by' => Null,

            ]);


        return redirect(route('verify.data'))
            ->with("success", "utensil validated and published");
    } //END OF VALIDATE FUNCTION

}
