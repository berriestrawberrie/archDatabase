<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use App\Models\Ceramic;
use App\Models\Collection;
use Illuminate\Http\Request;

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
}
