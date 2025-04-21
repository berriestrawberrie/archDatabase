<?php

namespace App\Http\Controllers;

use App\Models\Ceramic;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //GET THE ADMIN DASHBOARD
    public function adminDashboard()
    {
        $allceramics = Ceramic::count();
        $unvalid_ceramics = Ceramic::where('isValid', 0)->count();
        $valid_ceramics = Ceramic::where('isValid', 1)->count();


        return view('admin.dashboard', compact('allceramics', 'unvalid_ceramics', 'valid_ceramics'));
    }

    //GET THE MANAGE COLLECTIONS PAGE
    public function collections()
    {
        $collections = Collection::orderByDesc('id')->get();
        return view('admin.addcollection', compact('collections'));
    }

    //ADD A NEW COLLECTION
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

    //NAVIGATE TO UPDATE PAGE BASED ON SELECTION
    public function reUpdate($id)
    {
        $collection = Collection::where('id', $id)->get();

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
            return redirect()->route('return.update', ['id' => $request->id])
                ->with("success", "You have successfully updated the collection");
        } else {
            return redirect()->route('return.update', ['id' => $request->id])
                ->with("error", "You must enter data to update");
        }
    } //END PUSH FUNCTION


    public function verifyData()
    {
        $ceramics = Ceramic::all();
        $unassigned_ceramics = Ceramic::where('isValid', 0)
            ->where('checkout_by', null)
            ->get();

        return view('admin.verifydata', compact('ceramics', 'unassigned_ceramics'));
    }

    public function checkoutData(Request $request)
    {
        //GET THE USER INPUT
        $user = Auth::user()->id;
        $ceramics = intval($request->ceramics);

        $bones = intval($request->bones);

        //PULL THE RECORDS REQUESTED
        $assign_ceramics = Ceramic::where('isValid', 0)
            ->where('checkout_by', null)
            ->take($ceramics)->get();
        //ASSIGN THEM TO THE USER
        foreach ($assign_ceramics as $item) {

            Ceramic::where('id', $item->id)->update([
                'checkout_by' => $user
            ]);
        } //END OF FOREACH

        return redirect()->route('verify.data')
            ->with("success", "Successfully checked out records");
    }

    public function releaseData(Request $request)
    {

        $user = Auth::user()->id;
        $ceramic = $request->release_ceramic;

        if ($request->release_ceramic) {
            Ceramic::where('id', $ceramic)
                ->where('checkout_by', $user)
                ->update([
                    'checkout_by' =>
                    null
                ]);
            return redirect()->route('verify.data')
                ->with("success", "Successfully released Ceramic #:" . $ceramic);
        } //END CERAMIC IF

        return redirect()->route('verify.data')
            ->with("error", "Failed to release Ceramic #:" . $ceramic);
    }

    public function reviewData($user, $artifact_type, $id)
    {
        //DEFINE THE ARTIFACT TYPE FIRST
        if ($artifact_type == "ceramic") {
            $artifact = Ceramic::where('id', $id)->get();
        }



        //VERIFY THAT THE USER REVIEWING IS THE USER THAT CHECKED IT OUT
        if ($artifact[0]["checkout_by"] == $user) {
            //RETURN THE CERAMIC REIVEW FORM
            if ($artifact_type == "ceramic") {
                return view('forms.verifyceramic', compact('artifact'));
            } //END OF CERAMIC IF

            //RETURN THE BONES REVIEW FORM..


        } else {

            //CHANGE ERROR MESSAGE IF RECORD IS NOT YET CHECKED OUT
            if ($artifact[0]["checkout_by"]) {
                return redirect()->route('verify.data')
                    ->with("error", "Record is already being reviewed by User #: " . $artifact[0]["checkout_by"]);
            } else {
                return redirect()->route('verify.data')
                    ->with("error", "Record needs to be checked out before you can review it");
            }
        }
    } //END OF REVIEW DATA
}
