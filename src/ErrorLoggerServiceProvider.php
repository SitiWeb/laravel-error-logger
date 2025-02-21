<?php

namespace SitiWeb\ErrorLogger;

use Illuminate\Support\ServiceProvider;

class ErrorLoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish the config file
        $this->publishes([
            __DIR__.'/../config/errorlogger.php' => config_path('errorlogger.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/errorlogger.php', 'errorlogger');
    }
}
