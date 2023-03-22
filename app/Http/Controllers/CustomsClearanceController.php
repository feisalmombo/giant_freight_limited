<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomsClearanceController extends Controller
{
    public function index()
    {
        return view('pages.clearance.customs-clearance');
    }
}
