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
        /*UNION BEAD?
        $beads_datas = DB::table('bead_tables')->where('collection_id', $request->input('collection_id'))
            ->get([
                'material',
                'collection_id',
                'artifact_id',
                'collection',
                'manufacturing_technique',
                'start_date',
                'end_date',
                'photo'
            ]);
            */


        $datas = DB::table('ceramics_tables')
            ->where('collection_id', $request->input('collection_id'))
            //->union('$beads_datas')
            ->paginate(2, [
                'material',
                'collection_id',
                'artifact_id',
                'collection',
                'manufacturing_technique',
                'start_date',
                'end_date',
                'photo'
            ])
            ->appends('collection_id', $request->input('collection_id'));



        return view('results.resultscollection', compact('datas', 'start', 'end', 'collection_id'));
    }


    public function getQueryArtifact()
    {
        $collections = Collection::all();
        return view('queries.artifact', compact('collections'));
    }
}
