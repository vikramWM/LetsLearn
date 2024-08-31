<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        // Check if the user's role is equal to the specified role
        if (Auth::user() && Auth::user()->role == $role) {
            return $next($request);
        }

        // Redirect to a 404 page or any other page you prefer
        abort(404);
    }
}
