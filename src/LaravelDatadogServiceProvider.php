<?php

namespace JamesMills\LaravelDatadog;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LaravelDatadogServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        // Register the Timezone alias
        AliasLoader::getInstance()->alias('DataDog', \JamesMills\LaravelDatadog\Facades\Datadog::class);

        // Allow config publish
        $this->publishes([
            __DIR__ . '/config/datadog.php' => config_path('datadog.php'),
        ], 'config');




    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('datadogclient', DataDogClient::class);
    }
}
