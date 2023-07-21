<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MyMiddleware
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
        
      if (Auth::check()) {
         if(Auth::user()->is_adminm == true) 
             return $next($request);
         }   

     else{
         return redirect()->route('login');
     }

    }
}