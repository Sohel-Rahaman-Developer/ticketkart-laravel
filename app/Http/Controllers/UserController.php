<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('customer.user.dashboard');
    }
}
