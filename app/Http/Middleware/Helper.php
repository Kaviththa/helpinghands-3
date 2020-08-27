<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class Helper
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
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    if (Auth::user()->role == 1) {
        return $next($request);
    }

    if (Auth::user()->role == 2) {
        return redirect()->route('team');
    }

    if (Auth::user()->role == 3) {
        return redirect()->route('receiver');
    }
}
}
