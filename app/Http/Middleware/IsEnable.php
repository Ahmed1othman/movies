<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IsEnable
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

        if (!(auth()->user()->status == 'active'))
        {
            Session::flush();

            return  redirect()->route('login')->with(['error'=>__('users.account_disabled')]);
        }else
            return $next($request);
    }
}
