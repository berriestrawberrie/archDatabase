<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //STUDENT OR REGULAR DATA ENTRY USER DASHBOARD
    public function userDashboard()
    {
        return view('users.dashboard');
    }
}
