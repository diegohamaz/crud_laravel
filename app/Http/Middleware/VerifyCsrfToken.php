<?php

<<<<<<< HEAD
namespace App\Http\Middleware;
=======
namespace crud_laravel\Http\Middleware;
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
