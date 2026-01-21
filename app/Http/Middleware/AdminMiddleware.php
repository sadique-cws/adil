<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('auth.google');
        }

        $allowedEmails = ['dildarh330@gmail.com', 'comestrotechlabs@gmail.com'];

        if (!in_array(Auth::user()->email, $allowedEmails)) {
            Auth::logout(); // Force logout invalid users
            return redirect()->route('home')->with('error', 'Access Denied. You are not an admin.');
        }

        return $next($request);
    }
}
