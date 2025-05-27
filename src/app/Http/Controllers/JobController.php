<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function show(Request $request)
    {
        return view('job');
    }
}
