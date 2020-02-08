<?php

namespace App\Http\Controllers;

use App\Indredient;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchRecipeController extends Controller
{


    public function search(Request $request)
    {
        $ingredient = Indredient::all();
        $ingredient_filter = $request->get('ingredient_filter');
        sort($ingredient_filter);
        $ingredient_str = implode(",", $ingredient_filter);
        $recipe = Recipe::where('ing_for_filter', 'like', '%' . $ingredient_str . '%')->paginate(10);

        $count = Recipe::all();
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);

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
        $recipe = DB::table('recipes')->where('kind_of_recipe', 'like', 'first_dish')->paginate(10);;
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }


}
