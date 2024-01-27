<?php

namespace App\Http\Controllers;

use App\User;
use App\UserPoll;
use App\UserRecommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        return view(
            'recommendation.index',
            [
                'recommendation' => UserRecommendation::where('user_id', '=', $id)->orderBy('updated_at', 'desc')->get(),
                'user' => User::find($id),
                'poll' => UserPoll::where('user_id', '=', $id)->get()
            ]
        );
    }


    public function create()
    {
        return redirect('/user/recommendation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
