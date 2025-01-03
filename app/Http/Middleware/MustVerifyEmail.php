<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MustVerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if (Auth::user()->hasRole('School Admin')) {
<<<<<<< HEAD
            if (!$user->hasVerifiedEmail()) {
                return redirect('/email/verify');
            }
=======
            // if (!$user->hasVerifiedEmail()) {
            //     return redirect('/email/verify');
            // }
>>>>>>> acbb587 (First commit)
        }
        return $next($request);
    }
}
