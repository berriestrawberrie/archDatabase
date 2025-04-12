<?php

namespace App\Http\Controllers;

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
}
