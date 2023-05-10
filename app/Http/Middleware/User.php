<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = auth()->user() ? auth()->user()->role : false;
        switch ($auth) {
            case 'admin':
            case 'member':
                return $next($request);

            default:
                return redirect('/recipe');
        }
    }
}
