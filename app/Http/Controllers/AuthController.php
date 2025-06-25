<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //RETURN THE LOGIN VIEW
    public function login()
    {
        return view('auth.login');
    }

    //SUBMIT THE LOGIN FORM
    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {

            if (in_array(Auth::user()->user_type, ['admin', 'owner'])) {
                return redirect()->intended(route('admin.dashboard'));
            } else {
                return redirect()->intended(route('users.dashboard'));
            }
        }
        return redirect(route('login'))
            ->with("error", "Login failed incorrect email or password");
    }

    //RETURN THE LOGIN VIEW
    public function register()
    {

        return view('auth.register');
    }
    //SUBMIT THE REGISTRATION FORM
    public function registerPost(Request $request)
    {
        $request->validate([
            "fullname" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            return redirect(route('login'))
                ->with("success", "User created successfully");
        }
        return redirect(route('register'))
            ->with("error", "Failed to create account");
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with("success", "Successfully logged out.");
    }
}
