<?php

namespace App\Http\Controllers;

use App\Models\Bead;
use App\Models\BonesI;
use App\Models\BonesII;
use App\Models\Buckle;
use App\Models\Button;
use App\Models\Ceramic;
use App\Models\Collection;
use App\Models\Glass;
use App\Models\Utensil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //PREVIEW FORM BEFORE SUBMISSION
    public function previewForm($artifact_type, $token, $user)
    {

        //VERIFY THAT ONLY THE USER THAT CREATED TEH RECORD CAN ACCESS 
        if (Auth::user()->id != $user) {
            return redirect(route('entered.by', ['user' => $user]))
                ->with("error", "You have not entered this artifact you cannot submit for validation.");
        } else {
            //GET THE NEWLY CREATED ARTIFACT BY THE TOKEN and artifact form
            switch ($artifact_type) {
                case "ceramic":
                    $artifact = Ceramic::where('token', $token)->get();
                    //VERIFY THAT THE STATUS IS RECENTLY SUBMITTED IF NOT RETURN ERROR
                    if ($artifact[0]["isValid"] != 2) {
                        return redirect(route('entered.by', ['user' => $user]))
                            ->with("error", "Artifact already submitted");
                    }
                    //RETURN THE PREVIEW FORM FILLED OUT
                    return view('forms.preview.previewceramic', compact('artifact'));
                    break;
                case "bead":
                    $artifact = Bead::where('token', $token)->get();
                    //VERIFY THAT THE STATUS IS RECENTLY SUBMITTED IF NOT RETURN ERROR
                    if ($artifact[0]["isValid"] != 2) {
                        return redirect(route('entered.by', ['user' => $user]))
                            ->with("error", "Artifact already submitted");
                    }
                    //RETURN THE PREVIEW FORM FILLED OUT
                    return view('forms.preview.previewbead', compact('artifact'));
                    break;
                case "buckle":
                    $artifact = Buckle::where('token', $token)->get();
                    //VERIFY THAT THE STATUS IS RECENTLY SUBMITTED IF NOT RETURN ERROR
                    if ($artifact[0]["isValid"] != 2) {
                        return redirect(route('entered.by', ['user' => $user]))
                            ->with("error", "Artifact already submitted");
                    }
                    //RETURN THE PREVIEW FORM FILLED OUT
                    return view('forms.preview.previewbuckle', compact('artifact'));
                case "button":
                    $artifact = Button::where('token', $token)->get();
                    //VERIFY THAT THE STATUS IS RECENTLY SUBMITTED IF NOT RETURN ERROR
                    if ($artifact[0]["isValid"] != 2) {
                        return redirect(route('entered.by', ['user' => $user]))
                            ->with("error", "Artifact already submitted");
                    }
                    //RETURN THE PREVIEW FORM FILLED OUT
                    return view('forms.preview.previewbutton', compact('artifact'));
                case "glass":
                    $artifact = Glass::where('token', $token)->get();
                    //VERIFY THAT THE STATUS IS RECENTLY SUBMITTED IF NOT RETURN ERROR
                    if ($artifact[0]["isValid"] != 2) {
                        return redirect(route('entered.by', ['user' => $user]))
                            ->with("error", "Artifact already submitted");
                    }
                    //RETURN THE PREVIEW FORM FILLED OUT
                    return view('forms.preview.previewglass', compact('artifact'));
                case "utensil":
                    $artifact = Utensil::where('token', $token)->get();
                    //VERIFY THAT THE STATUS IS RECENTLY SUBMITTED IF NOT RETURN ERROR
                    if ($artifact[0]["isValid"] != 2) {
                        return redirect(route('entered.by', ['user' => $user]))
                            ->with("error", "Artifact already submitted");
                    }
                    //RETURN THE PREVIEW FORM FILLED OUT
                    return view('forms.preview.previewutensil', compact('artifact'));
                default:
                    return back()->with("error", "Invalid form type");
            }
        }
    }

    //SAVED ARTIFACT LIST
    public function savedList($user)
    {
        $ceramics = Ceramic::where('entered_by', $user)
            ->where('isValid', 2)->get();
        $beads = Bead::where('entered_by', $user)
            ->where('isValid', 2)->get();
        $buckles = Buckle::where('entered_by', $user)
            ->where('isValid', 2)->get();
        $buttons = Button::where('entered_by', $user)
            ->where('isValid', 2)->get();
        $glasses = Glass::where('entered_by', $user)
            ->where('isValid', 2)->get();
        $utensils = Utensil::where('entered_by', $user)
            ->where('isValid', 2)->get();

        return view('users.savedartifacts', compact('ceramics', 'beads', 'buckles', 'buttons', 'glasses', 'utensils'));
    }
}
