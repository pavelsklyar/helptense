<?php

namespace App\Http\Controllers;

use App\Model\FavouriteVerb;
use App\Model\Verb;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerbController extends Controller
{
    public function irregular($verb)
    {
        $verb = Verb::where("first_form", $verb)->first();

        if (Auth::check()) {
            $favourite = FavouriteVerb::where('user_id', Auth::id())->get();

            if ($favourite->count()) {
                $favourite = false;
            }
            else {
                $favourite = true;
            }
        }
        else {
            $favourite = null;
        }

        return view("irregular.verb", ['verb' => $verb, 'favourite' => $favourite]);
    }

    public function phrasal($verb)
    {

    }

    public function liveSearch(Request $request)
    {
        $search = $request->input("search");

        $verbs = Verb::where('first_form', 'like', "%$search%")->get();

        $str = "<div class='search_result'><table>";;
        foreach ($verbs as $verb) {
            $item = $verb->first_form;

            $bold = "<b class='verbs'>" . $search . "</b>";
            $boldVerb = str_replace($search, $bold, $item);

            $str .= "
                <tr>
                    <td class='search_result-name'>
                        <a class='verbs' href='#' onclick='enter(\"$item\")'>$boldVerb</a>
                    </td>
                </tr>
                ";
        }
        $str .= "</table></div>";

        return $str;
    }

    public function favourite(Request $request)
    {
        $user_id = $request->input("user_id");
        $verb_id = $request->input("verb_id");

        $favourite = FavouriteVerb::where([
            ['user_id', $user_id],
            ['verb_id', $verb_id],
        ])->get();

        if ($favourite->count()) {
            FavouriteVerb::where([
                ['user_id', $user_id],
                ['verb_id', $verb_id],
            ])->delete();

            return new JsonResponse(['type' => "delete"]);
        }
        else {
            $favourite = new FavouriteVerb();
            $favourite->user_id = $user_id;
            $favourite->verb_id = $verb_id;
            $favourite->save();

            return new JsonResponse(['type' => "insert"]);
        }
    }
}
