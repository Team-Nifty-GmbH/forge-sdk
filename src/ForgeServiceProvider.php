<?php

namespace TeamNifty\Forge;

use Illuminate\Support\ServiceProvider;

class ForgeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/forge.php' => config_path('forge.php'),
            ], 'forge-config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/forge.php',
            'forge'
        );

        $this->app->singleton(Forge::class, function ($app) {
            $config = $app['config']['forge'];

            return new Forge(
                bearerToken: $config['api_token'],
                clientId: $config['oauth']['client_id'],
                clientSecret: $config['oauth']['client_secret'],
            );
        });

        $this->app->alias(Forge::class, 'forge');
    }
}
