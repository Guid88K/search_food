<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\SavedRecipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $id)
    {
        $recipe = Recipe::find($id);

        $savedRecipe = new SavedRecipe([
            'user_id' => Auth::user()->id,
        ]);

        $recipe->saved_recipe()->save($savedRecipe);

        return redirect('/recipe/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $savedRecipe = SavedRecipe::find($id);
        $savedRecipe->delete();

        return redirect()->back();
    }
}
