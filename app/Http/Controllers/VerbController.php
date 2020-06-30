<?php

namespace App\Http\Controllers;

use App\Model\Verb;
use Illuminate\Http\Request;

class VerbController extends Controller
{
    public function irregular($verb)
    {
        $verb = Verb::where("first_form", $verb)->first();

        return view("irregular.verb", ['verb' => $verb]);
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
}
