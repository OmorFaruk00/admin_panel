<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToApps
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
        if(!empty(session('token'))){
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
