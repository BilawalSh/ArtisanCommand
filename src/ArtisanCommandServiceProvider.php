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
        $this->mergeConfigFrom(__DIR__ . '/config/artisanCommand.php', 'artisanCommand');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/artisanCommand.php' => config_path('artisanCommand.php'),
        ]);
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
}
