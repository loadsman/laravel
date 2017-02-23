<?php

namespace Loadsman\LaravelPlugin\Repositories;

use Loadsman\LaravelPlugin\Collections\RouteCollection;
use Loadsman\LaravelPlugin\Contracts\RouteRepositoryInterface;
use Loadsman\LaravelPlugin\Entities\RouteInfo;
use Illuminate\Routing\Router;

class RouteLaravelRepository implements RouteRepositoryInterface
{
    /**
     * @type Router
     */
    protected $routes;

    public function __construct(Router $router)
    {
        $this->router = $router;

        foreach ($router->getRoutes() as $route) {
            $routeInfo = (new RouteInfo($route, ['router' => 'Laravel']))->toArray();
            $this->routes->push($routeInfo);
        }
    }

    /**
     * @return \Loadsman\LaravelPlugin\Collections\RouteCollection
     */
    public function get()
    {
        return $this->routes->values();
    }
}
