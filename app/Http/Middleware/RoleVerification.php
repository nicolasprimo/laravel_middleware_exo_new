<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      
        if (Auth::check() && Auth::user()->role->name == "Webmaster" || Auth::check() && Auth::user()->role->name == "Admin" ||
        Auth::check() && Auth::user()->role->name == "Redacteur"  ) {
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
