<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValueAddedController extends Controller
{
    public function index()                          
    {
        return view('pages.value-added.value-added-service');
    }
}
