<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
                return $next($request);

            default:
                return redirect('/recipe');
        }
    }
}
