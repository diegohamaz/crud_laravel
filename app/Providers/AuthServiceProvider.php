<?php

<<<<<<< HEAD
namespace App\Providers;
=======
namespace crud_laravel\Providers;
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        'App\Model' => 'App\Policies\ModelPolicy',
=======
        'crud_laravel\Model' => 'crud_laravel\Policies\ModelPolicy',
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
