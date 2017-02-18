<?php

namespace Loadsman\Laravel\Modules\Framework;
use Illuminate\Routing\Router;

class FrameworkServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot(Router $router)
    {
        $router->group([
            'prefix'     => 'loadsman/framework',
        ], function ($router) {
            $router->exposeAll(FrameworkController::class);
        });
    }
}