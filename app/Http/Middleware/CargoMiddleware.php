<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CargoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$cargos): Response
    {
        if (!in_array($request->user()->cargo->nombre, $cargos)) {
            abort(403, 'No tenes permisos para acceder a esta sección');
        }
        return $next($request);
    }
}
