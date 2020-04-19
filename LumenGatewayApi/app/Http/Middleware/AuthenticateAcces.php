<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AuthenticateAcces
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $validSecret = explode(',', env('ACCEPTED_SECRET'));

        if (in_array($request->header('Authorization'), $validSecret)) {
            return $next($request);
        }

        abort(Response::HTTP_UNAUTHORIZED);

    }
}
