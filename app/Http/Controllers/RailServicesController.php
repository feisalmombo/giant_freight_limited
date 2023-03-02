<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RailServicesController extends Controller
{
    public function index()
    {
        return view('pages.rail.railservices');
    }
}
