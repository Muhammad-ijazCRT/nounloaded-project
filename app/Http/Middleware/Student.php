<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Student
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
        if( (Auth::guard('student')->check()) && (Auth::guard('student')->user()->role == "student") ){
            return $next($request);
        }
        else{
            return redirect()->to("student-login/")->withErrors('errors', "Not Permitted! Try by logging in!");
        }
    }
}
