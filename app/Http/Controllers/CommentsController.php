<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment->delete();

        return redirect()->back();
    }
}
