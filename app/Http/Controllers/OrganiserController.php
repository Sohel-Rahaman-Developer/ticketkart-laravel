<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organiserrole;
use App\Models\Organiseruser;

class OrganiserController extends Controller
{
    public function create()
    {
        return view('customer.organiser.create');
    }
}
