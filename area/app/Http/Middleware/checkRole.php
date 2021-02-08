<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkRole
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
        if(Auth::user()->role == "admain"){
            return $next($request);
        }else{
            return response("Unauthorized");
        }
    }
}
