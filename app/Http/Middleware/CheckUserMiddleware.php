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

        } elseif ($request->user()->usertype == 'user' && $request->user()->activity == 'deactivate' && $request->user()->deleted == 'alive') {

            //your account has been deactivated
            session()->flash('Error', 'Your account has been terminated by the administrator');
            auth()->logout($request->user());
            return redirect()->route('web.index');
        } elseif ($request->user()->usertype == 'user' && $request->user()->deleted == 'died') {

            //your account has been deactivated
            session()->flash('Error', 'Your account has been deleted by the administrator. Please follow us through the contact page');
            auth()->logout($request->user());
            return redirect()->route('web.index');
        }
    }
}
