<?php

namespace Phplibw\Json;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;

class JsonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        // dd('ddddddddd');
        $kernel->pushMiddleware('Phplibw\Json\Middleware\JsonValidateMiddleware');
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
