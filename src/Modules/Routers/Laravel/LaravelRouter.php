<?php

namespace Loadsman\Laravel\Modules\Routers\Laravel;

use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Loadsman\Laravel\Modules\Routers\RouterContract;

class LaravelRouter implements RouterContract
{
    public function getName()
    {
        return 'Laravel';
    }

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->transformer = new LaravelRouteToRuleCaster();
    }

    /**
     * @return Array<\Loadsman\PHP\DAO\Rule>
     */
    public function getRules()
    {
        $routes = $this->router->getRoutes()->getRoutes();

        return array_map(function (Route $route) {
            return $this->transformer->cast($route);
        }, $routes);
    }
}