<?php

namespace App\Http\Controllers;

use App\FoodIng;
use App\FoodRecipe;
use App\Ingredient;
use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRecipeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view(
            'admin.index',
            [
                'recipe' => Recipe::where('is_published', '=', true)->get(),
                'user' => User::find(Auth::id()),
                'pre_confirm' => Recipe::where('is_published', '=', false)->get(),
            ]
        );
    }

    public function indexConfirm()
    {
        return view(
            'admin.to_confirm',
            [
                'recipe' => Recipe::where('is_published', '=', true)->get(),
                'user' => User::find(Auth::id()),
                'pre_confirm' => Recipe::where('is_published', '=', false)->get(),
            ]
        );
    }

    public function create()
    {
        return view(
            'admin.create',
            [
                'ingredient' => Ingredient::all(),
                'user' => User::find(Auth::id()),
            ]
        );
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::id());

        $recipe = new Recipe();
        $file = $request->file('main_image');

        if ($request->file('main_image') == null) {
            $recipe->recipe_image = 'default-image.jpg';
        } else {
            $newName = uniqid('file_') . '.jpg';
            $file->move('upload', $newName);
            $recipe->recipe_image = $newName;
        }

        $recipe->recipe_name = $request->name;
        $recipe->kind_of_recipe = $request->kind_of_recipe;
        $recipe->recipe_description = $request->description_for_recipe;

        $ing_for_array = [];
        foreach ($request->ing as $ing) {
            $ing_for_array[] = $ing;

            $check_ing = Ingredient::where('name', '=', $ing)->first();
            if ($check_ing !== null) {
                continue;
            }
            $save_check_ing = new Ingredient();
            $save_check_ing->name = $ing;
            $save_check_ing->save();
        }
        sort($ing_for_array);
        $ing_str = implode(",", $ing_for_array);
        $recipe->ing_for_filter = $ing_str;
        $user->recipe()->save($recipe);

        foreach ($request->ing as $key => $ing) {
            foreach ($request->count as $key1 => $count) {
                foreach ($request->kind as $key2 => $kind) {
                    if ($key == $key1 && $key1 == $key2) {
                        $food_ing = new FoodIng();
                        $food_ing->ingredient_name = $ing;
                        $food_ing->ingredient_count = $count;
                        $food_ing->ingredient_kind = $kind;
                        $recipe->food_ing()->save($food_ing);
                    }
                }
            }
        }

        foreach ($request->image as $key => $i) {
            $newFoodStepName = uniqid('step_file_') . '.jpg';;
            $file = $i;
            $file->move('upload', $newFoodStepName);
            foreach ($request->description as $key1 => $d) {
                if ($key !== $key1) {
                    continue;
                }
                $food_recipe = new FoodRecipe();
                $food_recipe->image = $newFoodStepName;
                $food_recipe->description = $d;
                $recipe->food_recipe()->save($food_recipe);
            }
        }

        return redirect('/recipe');
    }

    public function edit(int $id)
    {
        $recipe = Recipe::find($id);
        $food_ing = $recipe->food_ing;
        $food_recipe = $recipe->food_recipe;

        return view('admin.edit', [
            'recipe' => $recipe,
            'food_ing' => $food_ing,
            'food_recipe' => $food_recipe,
            'user' => User::find(Auth::id()),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $user = User::find(Auth::id());

        $recipe = Recipe::find($id);
        if (! ($request->file('main_image') == null)) {
            $file = $request->file('main_image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $recipe->recipe_image = $file->getClientOriginalName();
        }

        $recipe->recipe_name = $request->name;
        $recipe->kind_of_recipe = $request->kind_of_recipe;
        $recipe->recipe_description = $request->description_for_recipe;

        $ing_for_array = [];
        foreach ($request->ing as $ing) {
            $ing_for_array[] = $ing;

            $check_ing = Ingredient::where('name', '=', $ing)->first();
            if ($check_ing === null) {
                $save_check_ing = new Ingredient();
                $save_check_ing->name = $ing;
                $save_check_ing->save();
            }
        }
        sort($ing_for_array);
        $ing_str = implode(",", $ing_for_array);
        $recipe->ing_for_filter = $ing_str;

        $user->recipe()->save($recipe);


        foreach ($request->ing as $key => $ing) {
            foreach ($request->count as $key1 => $count) {
                foreach ($request->kind as $key2 => $kind) {
                    $d_ing = $recipe->food_ing;
                }
            }
            foreach ($d_ing as $di) {
                $di->delete();
            }
            if ($key == $key1 && $key1 == $key2) {
                $food_ing = new FoodIng();
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
            foreach ($request->description as $key1 => $d) {
                if ($key == $key1) {
                    $food_recipe = new FoodRecipe();
                    $food_recipe->image = $file->getClientOriginalName();
                    $food_recipe->description = $d;
                    $recipe->food_recipe()->save($food_recipe);
                }
            }
        }


        return redirect('/recipe');
    }

    public function destroy(int $id)
    {
        Recipe::find($id)->delete();

        return redirect('admin/recipe');
    }

    public function confirm(int $id)
    {
        $toConfirm = Recipe::find($id);

        $toConfirm->is_published = true;
        $toConfirm->save();

        return redirect('admin/recipe');
    }

    public function deleteConfirm(int $id)
    {
        $toConfirm = Recipe::find($id);
        $toConfirm->delete();

        return redirect('admin/confirm');
    }
}
