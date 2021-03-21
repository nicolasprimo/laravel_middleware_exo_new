<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImTheAuthor
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
        $articleUserId = $request->route()->parameters()['article']->user_id;
        if (Auth::user()->id ==$articleUserId || Auth::user()->role->name == 'Admin'|| Auth::user()->role->name == 'Webmaster') {
            return $next($request);
        }
        return redirect()->back();
    }
}
