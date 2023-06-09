<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request);
          //if no user or if the user is not admin 
          if (!$request->user() || !$request->user()->is_admin) {
            return abort(403, 'Sorry you do not have access');
        }

        return $next($request);
    }
}
