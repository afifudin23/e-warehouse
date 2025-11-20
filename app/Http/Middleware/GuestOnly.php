<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestOnly
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            return redirect("/superadmin/users");
        }
        return $next($request);
    }
}
