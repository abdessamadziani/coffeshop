<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth()->user()->role == 0){
            // Auth::logout();
            abort(401);
        }else{
            return $next($request);
        }    }
}
