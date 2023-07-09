<?php

namespace Phplibw\Json;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Phplibw\Json\Middleware\JsonValidateMiddleware;

class JsonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->prependMiddlewareToGroup('web', JsonValidateMiddleware::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

