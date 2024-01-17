<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Recipe;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request, int $id)
    {
        $recipe = Recipe::find($id);

        $comment = new Comments([
            'text' => $request->text,
            'user_id' => Auth::user()->id,
        ]);

        $recipe->comment()->save($comment);

        return redirect('/recipe/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment->delete();

        return redirect()->back();
    }
}
