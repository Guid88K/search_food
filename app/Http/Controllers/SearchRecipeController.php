<?php

namespace App\Http\Controllers;

use App\Indredient;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchRecipeController extends Controller
{


    public function search(Request $request, Recipe $model)
    {

        $not_null_ingredient = array();
        $ingredient = Indredient::all();
        $ingredient_filter = $request->get('ingredient_filter');

        foreach ($ingredient_filter as $key => $ing) {
            if ($ing == null) {
                unset($ing[$key]);
            } else {
                array_push($not_null_ingredient, $ing);
            }

        }

        sort($not_null_ingredient);
//        $recipe = Recipe::all();
        $recipe = DB::table('recipes')->paginate(10);

        foreach ($recipe as $key => $r) {
            if (count(
                    array_intersect($not_null_ingredient, explode(",", $r->ing_for_filter))
                ) != count($not_null_ingredient)) {
                $recipe->where('recipe_name', 'like', $r->recipe_name);
                unset($recipe[$key]);

            }
        }

//       $recipe->forPage(1,10);
        $count = Recipe::all();
        return view('pages.index', [
            'ingredient' => $ingredient,
            'count' => $count])->with('recipe', $recipe);
    }


    public function search_for_first()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'first_dish')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    public function search_for_second()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'second_dish')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    public function search_for_salad()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'salad')->paginate(10);
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    public function search_for_snack()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'snack')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    public function search_for_baking()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'baking')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    public function search_for_dessert()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'dessert')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    public function search_for_drinks()
    {
        $count = Recipe::all();
        $ingredient = Indredient::all();
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'drinks')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }


}
