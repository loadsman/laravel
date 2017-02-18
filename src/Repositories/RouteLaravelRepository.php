<?php

namespace Loadsman\Laravel\Repositories;

use Loadsman\Laravel\Collections\RouteCollection;
use Loadsman\Laravel\Contracts\RouteRepositoryInterface;
use Loadsman\Laravel\Entities\RouteInfo;
use Illuminate\Routing\Router;

class RouteLaravelRepository implements RouteRepositoryInterface
{
    /**
     * @type \Loadsman\Laravel\Collections\RouteCollection
     */
    protected $routes;

    public function __construct(RouteCollection $collection, Router $router)
    {
        $this->routes = $collection;

        foreach ($router->getRoutes() as $route) {
            $routeInfo = (new RouteInfo($route, ['router' => 'Laravel']))->toArray();
            $this->routes->push($routeInfo);
        }
    }

    /**
     * @param array $match
     * @param array $except
     *
     * @return \Loadsman\Laravel\Collections\RouteCollection
     */
    public function get($match = [], $except = [])
    {
        return $this->routes->filterMatch($match)
            ->filterExcept($except)
            ->values();
    }
}
