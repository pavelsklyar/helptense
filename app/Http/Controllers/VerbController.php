<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerbController extends Controller
{
    public function irregular($verb)
    {

    }

    public function phrasal($verb)
    {

    }

    public function liveSearch(Request $request)
    {
        $search = $request->input("search");


    }
}
