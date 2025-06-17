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
}
