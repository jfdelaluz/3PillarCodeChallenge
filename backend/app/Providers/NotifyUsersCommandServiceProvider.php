<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\NotifyUsersCommand;

class NotifyUsersCommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            NotifyUsersCommand::class, function( $app ) {
                return new NotifyUsersCommand(
                    $app->make( 'App\Services\UserService' ),
                    $app->make( 'App\Services\EmailNotifierService' )
                );
            }
        );
    }
}
