<?php

namespace App\Http\Controllers;

use App\Models\BonesI;
use App\Models\BonesII;
use App\Models\Ceramic;
use App\Models\Collection;
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
    public function previewForm($artifact_id, $user)
    {
        //VERIFY THAT ONLY THE USER THAT CREATED TEH RECORD CAN ACCESS 
        if (Auth::user()->id != $user) {
            return redirect(route('entered.by', ['user' => $user]))
                ->with("error", "You have not entered this artifact you cannot complete the review");
        } else {
            //GET THE NEWLY CREATED ARTIFACT BY THE UNIQUE ID
            $artifact = Ceramic::where('artifact_id', $artifact_id)->get();

            //RETURN THE PREVIEW FORM FILLED OUT
            return view('forms.preview.previewceramic', compact('artifact'));
        }
    }

    //SAVED ARTIFACT LIST
    public function savedList($user)
    {
        $ceramics = Ceramic::where('entered_by', $user)
            ->where('isValid', 2)->get();

        return view('users.savedartifacts', compact('ceramics'));
    }
}
