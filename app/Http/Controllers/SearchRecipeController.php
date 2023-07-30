<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchRecipeController extends Controller
{
    public function search(Request $request)
    {
        $user = User::find(Auth::id()) ?? null;
        $not_null_ingredient = [];
        $ingredient = Ingredient::all();
        $ingredient_filter = $request->get('ingredient_filter');

        foreach ($ingredient_filter as $key => $ing) {
            if ($ing == null) {
                unset($ing[$key]);
            } else {
                $not_null_ingredient[] = $ing;
            }
        }

        sort($not_null_ingredient);
        $recipe = DB::table('recipes')->paginate(10);
        foreach ($recipe as $key => $r) {
            if (count(
                array_intersect($not_null_ingredient, explode(",", $r->ing_for_filter))
            ) != count($not_null_ingredient)) {
                $recipe->where('recipe_name', 'like', $r->recipe_name);
                unset($recipe[$key]);
            }
        }
        $count = Recipe::all();

        return view('pages.index', [
            'ingredient' => $ingredient,
            'count' => $count,
            'user' => $user,
        ])->with('recipe', $recipe);
    }

    public function search_by_category(string $category)
    {
        $user = User::find(Auth::id()) ?? null;
        $count = Recipe::where('is_published', '=', true)->get();
        $ingredient = Ingredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', $category)->paginate(10);

        return view(
            'pages.index',
            [
                'recipe' => $recipe,
                'ingredient' => $ingredient,
                'count' => $count,
                'user' => $user,
            ]
        );
    }
}
