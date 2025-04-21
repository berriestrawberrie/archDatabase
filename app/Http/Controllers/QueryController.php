<?php

namespace App\Http\Controllers;

use App\Models\Ceramic;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    public function queryArtifact()
    {
        $ceramics = Ceramic::all();
        return view('queryartifact', compact('ceramics'));
    }
}
