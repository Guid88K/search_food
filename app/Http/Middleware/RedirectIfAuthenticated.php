<?php

namespace App\Http\Middleware;

use App\Enums\Routes;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next, ?string $guard = null): mixed
    {
        if (Auth::guard($guard)->check()) {
            return redirect(Routes::RECIPE->value);
        }

        return $next($request);
    }
}
