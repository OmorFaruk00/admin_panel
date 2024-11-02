<?php

use App\Http\Middleware\CommonAccessMiddleware;
use App\Http\Middleware\TestMiddlewere;
use App\Http\Middleware\TokenAuthMiddleware;
use App\Http\Middleware\LoggedInMiddlewere;
use App\Http\Middleware\RedirectToApps;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'CommonAccessMiddleware'=>CommonAccessMiddleware::class,
            'logged_in'=>LoggedInMiddlewere::class,
            'redirect_to_apps'=>RedirectToApps::class,
            'token.auth'=>TokenAuthMiddleware::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
