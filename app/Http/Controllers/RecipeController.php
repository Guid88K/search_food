<?php

namespace App\Http\Controllers;

use App\FoodIng;
use App\FoodRecipe;
use App\Indredient;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $recipe = Recipe::orderBy('updated_at','desc')->paginate(10);
        $count = Recipe::all();
        $ingredient = Indredient::all();
        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        $food_ing = $recipe->food_ing;
        $food_recipe = $recipe->food_recipe;
        return view('pages.show', [
            'recipe' => $recipe,
            'food_ing' => $food_ing,
            'food_recipe' => $food_recipe
        ],
            compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

    }
}
