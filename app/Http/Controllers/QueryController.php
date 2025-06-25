<?php

namespace App\Http\Controllers;

use App\Exports\QueryExports;
use App\Exports\UserExports;
use App\Models\Ceramic;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class QueryController extends Controller
{
    //
    public function getQueryCollection()
    {
        $collections = Collection::all();
        return view('queries.collections', compact('collections'));
    }

    //EXPORT DATA
    public function export()
    {
        return Excel::download(new UserExports, 'users.xls');
    }
    //EXPORT QUERY DATA
    public function exportQuery($collection_id, $start, $end)
    {

        return (new QueryExports($collection_id, $start, $end))
            ->download('query.xlsx');
    }


    //RETURN DATA
    public function queryCollection(Request $request)
    {

        //VARIABLES PASSING ON TO THE VIEW:
        $collection_id = $request->input('collection_id');
        //HANDLE CASES WHEN DATES LEFT EMPTY
        if ($request->input('start_date')) {
            $start = $request->input('start_date');
        } else {
            $start = 1500;
        }
        if ($request->input('end_date')) {
            $end = $request->input('end_date');
        } else {
            $end = 1900;
        }
        //DETERMINE WHICH PHOTOS TO INCLUDE
        if (intval($request->input('has_photo')) === 0) {
            $photostart = 0;
            $photoend = 0;
        } elseif (intval($request->input('has_photo')) === 1) {
            $photostart = 1;
            $photoend = 2;
        } else {
            $photostart = 0;
            $photoend = 2;
        }


        $beads_datas = DB::table('bead_tables')
            ->select(DB::raw("bead_tables.material, 
                bead_tables.collection_id,
                bead_tables.artifact_id,
                bead_tables.collection,
                bead_tables.manufacturing_technique,
                bead_tables.start_date,
                bead_tables.end_date,
                bead_tables.photo,
                bead_tables.has_photo"));
        $buckles_datas = DB::table('buckle_tables')
            ->select(DB::raw("buckle_tables.material, 
                buckle_tables.collection_id,
                buckle_tables.artifact_id,
                buckle_tables.collection,
                buckle_tables.manufacturing_technique,
                buckle_tables.start_date,
                buckle_tables.end_date,
                buckle_tables.photo,
                buckle_tables.has_photo"));

        $glasses_datas = DB::table('glass_tables')
            ->select(DB::raw("glass_tables.material, 
                glass_tables.collection_id,
                glass_tables.artifact_id,
                glass_tables.collection,
                glass_tables.manufacturing_technique,
                glass_tables.start_date,
                glass_tables.end_date,
                glass_tables.photo,
                glass_tables.has_photo"));


        $pipes_datas = DB::table('pipe_tables')
            ->select(DB::raw("pipe_tables.material, 
                pipe_tables.collection_id,
                pipe_tables.artifact_id,
                pipe_tables.collection,
                pipe_tables.manufacturing_technique,
                pipe_tables.start_date,
                pipe_tables.end_date,
                pipe_tables.photo,
                pipe_tables.has_photo"));

        $utensils_datas = DB::table('utensil_tables')
            ->select(DB::raw("utensil_tables.material, 
                utensil_tables.collection_id,
                utensil_tables.artifact_id,
                utensil_tables.collection,
                utensil_tables.manufacturing_technique,
                utensil_tables.start_date,
                utensil_tables.end_date,
                utensil_tables.photo,
                utensil_tables.has_photo"));


        $ceramics = DB::table('ceramics_tables')
            ->select(DB::raw("ceramics_tables.material, 
                ceramics_tables.collection_id,
                ceramics_tables.artifact_id,
                ceramics_tables.collection,
                ceramics_tables.manufacturing_technique,
                ceramics_tables.start_date,
                ceramics_tables.end_date,
                ceramics_tables.photo,
                ceramics_tables.has_photo"))
            ->unionAll($beads_datas)
            ->unionAll($buckles_datas)
            ->unionAll($glasses_datas)
            ->unionAll($pipes_datas)
            ->unionAll($utensils_datas);

        if ($request->input('perpage') == "10") {
            $datas = DB::table(DB::raw("({$ceramics->toSql()}) as combined"))
                ->mergeBindings($ceramics)
                ->whereBetween('start_date', [$start, $end])
                ->paginate(10)
                ->appends('collection_id', $request->input('collection_id'))
                ->appends('start_date', $start)
                ->appends('end_date', $end)
                ->appends('artifact_types', $request->input('artifact_types'));
        } elseif ($request->input('perpage') == "50") {
            $datas = DB::table(DB::raw("({$ceramics->toSql()}) as combined"))
                ->mergeBindings($ceramics)
                ->whereBetween('start_date', [$start, $end])
                ->paginate(50)
                ->appends('collection_id', $request->input('collection_id'))
                ->appends('start_date', $start)
                ->appends('end_date', $end)
                ->appends('artifact_types', $request->input('artifact_types'));
        } else {
            $datas = DB::table(DB::raw("({$ceramics->toSql()}) as combined"))
                ->mergeBindings($ceramics)
                ->whereBetween('start_date', [$start, $end])
                ->whereBetween('has_photo', [$photostart, $photoend])
                ->paginate(500)
                ->appends('collection_id', $request->input('collection_id'))
                ->appends('start_date', $start)
                ->appends('end_date', $end)
                ->appends('artifact_types', $request->input('artifact_types'));
        }



        return view('results.resultscollection', compact('datas', 'start', 'end', 'collection_id'));
    }


    public function getQueryArtifact()
    {
        $collections = Collection::all();
        return view('queries.artifact', compact('collections'));
    }
}
