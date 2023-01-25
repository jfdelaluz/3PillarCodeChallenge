<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserControllerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Interfaces\UserServiceInterface',
            'App\Services\UserService'
        );
    }
}
