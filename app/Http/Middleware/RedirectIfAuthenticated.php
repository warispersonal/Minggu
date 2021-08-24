<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {       
        if (Auth::guard($guard)->check()) {

            if($guard == "superAdmin"){
                return redirect('/star/dashboard');
            }else if( $guard == "admin" ){
                return redirect('/admin/dashboard');
            }else if( $guard == "partner" ){
                return redirect('/partner/dashboard');
            }else{
                return redirect('/');
            }
        }
        
        return $next($request);
    }
}
