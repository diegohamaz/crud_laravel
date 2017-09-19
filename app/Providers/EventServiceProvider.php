<?php

<<<<<<< HEAD
namespace App\Providers;
=======
namespace crud_laravel\Providers;
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'App\Events\Event' => [
            'App\Listeners\EventListener',
=======
        'crud_laravel\Events\Event' => [
            'crud_laravel\Listeners\EventListener',
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
