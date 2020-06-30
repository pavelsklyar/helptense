<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tense()
    {
        return view('tense');
    }

    public function grammar()
    {
        return view('grammar');
    }
}
