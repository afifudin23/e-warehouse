<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\AuthMiddleware::class,
        'xxx' => \App\Http\Middleware\GuestOnly::class,
    ];
}
