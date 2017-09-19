<?php

<<<<<<< HEAD
namespace App\Http;
=======
namespace crud_laravel\Http;
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
<<<<<<< HEAD
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
=======
        \crud_laravel\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \crud_laravel\Http\Middleware\TrustProxies::class,
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
<<<<<<< HEAD
            \App\Http\Middleware\EncryptCookies::class,
=======
            \crud_laravel\Http\Middleware\EncryptCookies::class,
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
<<<<<<< HEAD
            \App\Http\Middleware\VerifyCsrfToken::class,
=======
            \crud_laravel\Http\Middleware\VerifyCsrfToken::class,
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
<<<<<<< HEAD
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
=======
        'guest' => \crud_laravel\Http\Middleware\RedirectIfAuthenticated::class,
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
