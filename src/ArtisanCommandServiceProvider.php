<?php

namespace BilawalSh\ArtisanCommand;

use Illuminate\Support\ServiceProvider;

class ArtisanCommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/config/artisanCommand.php', 'artisanCommand');
    }
}
