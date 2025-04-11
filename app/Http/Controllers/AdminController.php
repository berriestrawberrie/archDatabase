<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function collections()
    {
        $collections = Collection::orderByDesc('id')->get();
        return view('admin.addcollection', compact('collections'));
    }
    public function collectionsPost(Request $request)
    {

        //USE THE MODEL TO BUILD NEW DATA ENTRY
        $addCollection = new Collection([
            'collection' => $request->title,
            'curator' => $request->curator,
            'collection_desc' => $request->text
        ]);
        //SAVE TO DATABASE
        $addCollection->save();


        return redirect(route('collections'))
            ->with("success", "Successfully added collection");
    }

    //NAVIGATE TO UPDATE PAGE BASED ON SELECTION
    public function collectionsUpdate(Request $request)
    {
        $collection = Collection::where('id', $request->selected)->get();

        return view('admin.updatecollection', compact('collection'));
    }



    public function pushUpdate(Request $request)
    {

        //CHECK IF ANYTHING WAS ENTERED
        if ($request->curator || $request->title || $request->text) {
            //IF CURATOR ENTERED UPDATE ONLY DESCRIPTION
            if ($request->curator) {
                Collection::where('id', $request->id)
                    ->update([
                        'curator' => $request->curator
                    ]);
            }
            //IF DESCRIPTION ENTERED UPDATE ONLY DESCRIPTION
            if ($request->text) {
                Collection::where('id', $request->id)
                    ->update([
                        'collection_desc' => $request->text
                    ]);
            }
            //IF TITLE ENTERED UPDATE ONLY TITLE
            if ($request->title) {
                Collection::where('id', $request->id)
                    ->update([
                        'collection' => $request->title
                    ]);
            }

            return redirect(route('collections'))
                ->with("success", "Successfully collection information udpated!");
        } else {
            return redirect(route('collections'))
                ->with("error", "You must enter data to update");
        }
    } //END PUSH FUNCTION
}
