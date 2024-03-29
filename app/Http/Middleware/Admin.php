<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if( (Auth::guard('admin')->check()) && (Auth::guard('admin')->user()->admin_type == "admin") ){
            return $next($request);
        }
        else{
            return redirect()->to("admin-login/")->withErrors('errors', "Not Permitted! Try by logging in!");
        }
    }
}
