<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AllAuthMiddleware
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
        if(Auth::guard('admin')){
            return $next($request);
        }
        if(Auth::guard('superAdmin')){
            return $next($request);
        }
        if(Auth::guard('partner')){
            return $next($request);
        }
        return redirect()->route('star.login');
    }
}
