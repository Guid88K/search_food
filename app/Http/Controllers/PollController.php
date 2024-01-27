<?php

namespace App\Http\Controllers;

use App\Services\ArrayKeyPrefixFilter;
use App\User;
use App\UserPoll;
use App\UserRecommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class PollController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = Auth::id();
        return view(
            'poll.create',
            [
                'user' => User::find($id),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);

        $stressValue = ArrayKeyPrefixFilter::filter($request->request->all(), 'stress');

        $poll = new UserPoll();
        $poll->stress_result = \array_sum($stressValue);

        $user->poll()->save($poll);

        return redirect('/user/recommendation');
    }

}
