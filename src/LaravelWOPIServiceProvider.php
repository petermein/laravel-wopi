<?php

namespace Infratron\LaravelWOPI;

class LaravelWOPIServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/wopi.php' => config_path('wopi.php'),
        ], 'config');
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/wopi'),
        ]);
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang/', 'wopi');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/wopi.php', 'wopi');

    }
}
