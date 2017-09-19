<?php

<<<<<<< HEAD
namespace App\Http\Middleware;
=======
namespace crud_laravel\Http\Middleware;
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
