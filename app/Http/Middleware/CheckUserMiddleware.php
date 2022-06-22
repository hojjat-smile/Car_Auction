<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->usertype == 'user' && $request->user()->activity == 'active' && $request->user()->deleted == 'alive') {

            return $next($request);
        } else {
            //your account has been deactivated
            return redirect()->route('web.index')->with('message', 'Your account has been terminated by the administrator');;
        }
    }
}
