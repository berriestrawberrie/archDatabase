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

        return view('typeselects', compact('collections'));
    }
}
