<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Если role_id НЕ равен 1 (не админ) — выдаем ошибку
        if (!auth()->check() || auth()->user()->role_id !== 1) {
            abort(403, 'Доступ только для администратора.');
        }

        return $next($request);
    }
}