<?php

namespace Loadsman\Laravel\Repositories;

use Loadsman\Laravel\Collections\RouteCollection;
use Loadsman\Laravel\Contracts\RouteRepositoryInterface;

/**
 * Class RouteRepository
 *
 * @package \Loadsman\Laravel\Repositories
 */
class RouteRepository implements RouteRepositoryInterface
{
    /**
     * @type \Loadsman\Laravel\Contracts\RouteRepositoryInterface[]
     */
    protected $repositories;

    /**
     * @type \Loadsman\Laravel\Collections\RouteCollection
     */
    protected $routes;

    public function __construct(RouteCollection $routes, $repositories)
    {
        $this->routes = $routes;
        $this->repositories = $repositories;
    }

    /**
     * @param array $match
     * @param array $except
     *
     * @return mixed
     */
    public function get($match = [], $except = [])
    {
        foreach ($this->repositories as $repository) {

            foreach ($repository->get($match, $except) as $route) {
                $this->routes->push($route);
            }
        }

        return $this->routes;
    }
}
