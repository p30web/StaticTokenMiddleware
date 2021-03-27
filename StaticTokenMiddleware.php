<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaticTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws AuthorizationException
     */
    public function handle($request, Closure $next)
    {
        if ($request->has('token') && $request->input('token') == env('STATIC_TOKEN')) {
            return $next($request);
        }
        abort(Response::HTTP_FORBIDDEN, "Access Denied!");
    }
}
