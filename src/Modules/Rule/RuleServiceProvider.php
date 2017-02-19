<?php

namespace Loadsman\Laravel\Modules\Rule;
use Illuminate\Routing\Router;

class RuleServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot(Router $router)
    {
        $router->group([
            'prefix'     => 'loadsman/rules',
        ], function ($router) {
            $router->exposeAll(RuleController::class);
        });
    }
}