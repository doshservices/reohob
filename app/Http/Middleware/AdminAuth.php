<?php

namespace App\Http\Middleware;

use App\Article;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;


class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = "admin")
    {


         if ($guard == "admin" && Auth::guard($guard)->check()) {

            return $next($request);

        } else {
            
            return redirect('/login/admin')->with('error', 'Unauthorized action!');  
        
        }
    }
}