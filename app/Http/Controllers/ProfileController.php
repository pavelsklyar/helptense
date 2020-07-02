<?php

namespace App\Http\Controllers;

use App\Model\FavouriteVerb;
use App\Model\Verb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile.index");
    }

    public function settings()
    {
        return view("profile.settings");
    }

    public function favourites()
    {
        $favourites = FavouriteVerb::where('user_id', Auth::id())->get();

        $verbs = [];
        foreach ($favourites as $favourite) {
            $verbs[] = Verb::find($favourite->verb_id);
        }

        return view("profile.favourites", ['favourites' => $verbs]);
    }
}
