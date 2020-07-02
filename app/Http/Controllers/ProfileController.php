<?php

namespace App\Http\Controllers;

use App\Model\FavouriteVerb;
use App\Model\Verb;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile.index");
    }

    public function settings()
    {
        $user = User::find(Auth::id());

        return view("profile.settings", ['user' => $user]);
    }

    public function edit()
    {
        $user = User::find(Auth::id());

        return view("profile.change", ['user' => $user]);
    }

    public function update(Request $request)
    {
        $email = $request->input("email");
        $old_password = $request->input("old_password");
        $password = $request->input("password");
        $password_confirmation = $request->input("password_confirmation");

        $user = User::find(Auth::id());

        if ($email) {
            $user->email = $email;
            $user->save();
        }

        if ($old_password) {
            if (Hash::check($old_password, $user->password)) {
                if ($password === $password_confirmation) {
                    $user->password = Hash::make($password);
                    $user->save();
                }
            }
        }

        return view("profile.settings", ['message' => "Ваши настройки сохранены!", 'user' => $user]);
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
