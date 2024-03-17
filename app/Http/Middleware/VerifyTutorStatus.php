<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VerifyTutorStatus
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
        // if(Auth::check()){
        //     dd('asdfawdfa');
        // }
        // Check if the user is logged in
        if (Auth::guard('tutor')->user()) {
            $tutor = Auth::guard('tutor')->user(); // Assuming the tutor relationship is defined

            // Check if tutor's status is verified
            if ($tutor && $tutor->status !== '1') {
                // Tutor status is not verified, you can redirect or abort here
                session()->flash('alert', ['type' => 'error', 'message' => 'Your profile is under review.']);
                return redirect()->route('home'); // Change 'unverified.tutor' to your desired route
            }
        }

        return $next($request);
    }
}
