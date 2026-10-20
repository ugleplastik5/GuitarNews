<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JournalistMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && in_array(auth()->user()->role_id, [1, 2])) {
            return $next($request);
        }

        abort(403, 'Доступ только для журналистов и администраторов.');
    }
}