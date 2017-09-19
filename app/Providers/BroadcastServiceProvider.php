<?php

<<<<<<< HEAD
namespace App\Providers;
=======
namespace crud_laravel\Providers;
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
