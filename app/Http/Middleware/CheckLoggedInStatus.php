<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoggedInStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status == 0 && $request->route()->getName() !== 'register-2' && $request->route()->getName() !== 'logout') {
            return redirect()->route('register-2');
        }

        return $next($request);
    }
}
