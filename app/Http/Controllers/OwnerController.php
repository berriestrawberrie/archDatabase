<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    //
    public function manageUsers()
    {
        $users = User::orderby('status', 'DESC')->get();
        return view('owner.manageusers', compact('users'));
    }

    public function newUser(Request $request)
    {
        //CHECK IF EMAIL ALREADY EXISTS
        if (User::where('email', $request->input('email'))->exists()) {

            return back()->with('error', 'User Email already exists.');
        } else {

            //REMOVE SPACES FROM NAMES
            $firstname = str_replace(' ', '', $request->input('firstname'));
            $lastname = str_replace(' ', '', $request->input('lastname'));
            $name = $lastname . "," . $firstname;

            User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'password_encrypt' => $request->input('password'),
                'name' => $name,
                'user_type' => $request->input('user_type')
            ]);
            return back()->with('success', 'New User added.');
        }
    } //END OF NEW USER FUNCTION

    public function userSettings($id)
    {

        //GET THE SPECIFIC USER DATA
        $user = User::where('id', $id)->get();

        return view('owner.singleuser', compact('user'));
    }

    public function quickAction($id, $type)
    {

        switch ($type) {
            case "delete":
                User::where('id', $id)
                    ->update([
                        'status' => 0,
                    ]);
                return back()->with('error', 'Successfully Deleted User.');
            case "restore":
                User::where('id', $id)
                    ->update([
                        'status' => 1,
                    ]);
                return back()->with('success', 'Successfully Restored User.');
            default:
                return back()->with('error', "Invalid quick action.");
        }
    } //END QUICKACTION

    public function updateSettings(Request $request, $id)
    {

        User::where('id', $request->input('id'))
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'status' => $request->input('status'),
                'user_type' => $request->input('user_type')
            ]);

        return redirect(route('manage.users'))->with('success', 'Succesfully updated:' . $id);
    } //END OF UPDATESETTINGS
}
