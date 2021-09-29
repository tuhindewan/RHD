<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        return view('type.index');
    }
}
