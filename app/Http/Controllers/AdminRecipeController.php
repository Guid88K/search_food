<?php

namespace App\Http\Controllers;

use App\FoodIng;
use App\FoodRecipe;
use App\Indredient;
use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $recipe = Recipe::all();
        return view('admin.index', ['recipe' => $recipe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $recipe = new Recipe;
        $file = $request->file('main_image');
        $destinationPath = 'upload';

        if ($request->file('main_image') == null) {
            $recipe->recipe_image = 'default-image.jpg';
        } else {
            $file->move($destinationPath, $file->getClientOriginalName());
            $recipe->recipe_image = $file->getClientOriginalName();
        }

        $recipe->recipe_name = $request->name;
        $recipe->kind_of_recipe = $request->kind_of_recipe;
        $recipe->recipe_description = $request->description_for_recipe;

        $ing_for_array = array();
        foreach ($request->ing as $ing) {
            array_push($ing_for_array, $ing);

            $check_ing = Indredient::where('name', '=', $ing)->first();
            if ($check_ing === null) {
                $save_check_ing = new Indredient;
                $save_check_ing->name = $ing;
                $save_check_ing->save();
            }
        }
        sort($ing_for_array);
        $ing_str = implode(",", $ing_for_array);
        $recipe->ing_for_filter = $ing_str;
        $user->recipe()->save($recipe);


        foreach ($request->ing as $key => $ing) {
            foreach ($request->count as $key1 => $count)
                foreach ($request->kind as $key2 => $kind)
                    if ($key == $key1 && $key1 == $key2) {
                        $food_ing = new FoodIng;
                        $food_ing->ingredient_name = $ing;
                        $food_ing->ingredient_count = $count;
                        $food_ing->ingredient_kind = $kind;
                        $recipe->food_ing()->save($food_ing);
                    }

        }

        foreach ($request->image as $key => $i) {
            $file = $i;
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            foreach ($request->description as $key1 => $d)
                if ($key == $key1) {
                    $food_recipe = new FoodRecipe;
                    $food_recipe->image = $file->getClientOriginalName();
                    $food_recipe->description = $d;
                    $recipe->food_recipe()->save($food_recipe);
                }
        }


        return redirect('/recipe');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        $food_ing = $recipe->food_ing;
        $food_recipe = $recipe->food_recipe;
        return view('admin.edit', [
            'recipe' => $recipe,
            'food_ing' => $food_ing,
            'food_recipe' => $food_recipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);

        $recipe = Recipe::find($id);
        if (!($request->file('main_image') == null)) {
            $file = $request->file('main_image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $recipe->recipe_image = $file->getClientOriginalName();
        }

        $recipe->recipe_name = $request->name;
        $recipe->kind_of_recipe = $request->kind_of_recipe;
        $recipe->recipe_description = $request->description_for_recipe;

        $ing_for_array = array();
        foreach ($request->ing as $ing) {
            array_push($ing_for_array, $ing);

            $check_ing = Indredient::where('name', '=', $ing)->first();
            if ($check_ing === null) {
                $save_check_ing = new Indredient;
                $save_check_ing->name = $ing;
                $save_check_ing->save();
            }
        }
        sort($ing_for_array);
        $ing_str = implode(",", $ing_for_array);
        $recipe->ing_for_filter = $ing_str;

        $user->recipe()->save($recipe);


        foreach ($request->ing as $key => $ing) {
            foreach ($request->count as $key1 => $count)
                foreach ($request->kind as $key2 => $kind)
                    $d_ing = $recipe->food_ing;
            foreach ($d_ing as $di) {
                $di->delete();
            }
            if ($key == $key1 && $key1 == $key2) {
                $food_ing = new FoodIng;
                $food_ing->ingredient_name = $ing;
                $food_ing->ingredient_count = $count;
                $food_ing->ingredient_kind = $kind;
                $recipe->food_ing()->save($food_ing);
            }

        }

        $d_recipe = $recipe->food_recipe;
        foreach ($d_recipe as $dr) {
            $dr->delete();
        }


        foreach ($request->image as $key => $i) {
            $file = $i;
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            foreach ($request->description as $key1 => $d)
                if ($key == $key1) {
                    $food_recipe = new FoodRecipe;
                    $food_recipe->image = $file->getClientOriginalName();
                    $food_recipe->description = $d;
                    $recipe->food_recipe()->save($food_recipe);
                }
        }


        return redirect('/recipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id)->delete();
        return redirect('admin/recipe');
    }
}
