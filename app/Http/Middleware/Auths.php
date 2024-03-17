<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Auths
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
        if( Auth::guard('student')->check() ){
            return redirect()->to("student/student-dashboard/");
        }
        elseif( Auth::guard('tutor')->check() ){
            return redirect()->to("tutor/dashboard/");
        }
        elseif( Auth::guard('admin')->check() ){
            return redirect()->to("admin/dashboard/");
        }
        else{
            return $next($request);
        }
    }
}
