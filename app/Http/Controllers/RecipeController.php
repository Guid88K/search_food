<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Ingredient;
use App\Recipe;
use App\User;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = User::find(Auth::id()) ?? null;
        $recipe = Recipe::where('is_published', '=', true)
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('pages.index', [
            'recipe' => $recipe,
            'ingredient' => Ingredient::all(),
            'count' => Recipe::where('is_published', '=', true)->get(),
            'user' => $user,
        ]);
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
        $comments = Comments::where('recipe_id', $id)->get();

        return view(
            'pages.show',
            [
            'recipe' => $recipe,
            'food_ing' => $recipe->food_ing,
            'food_recipe' => $recipe->food_recipe,
            'comments' => $comments,
        ],
            compact('recipe')
        );
    }
}
