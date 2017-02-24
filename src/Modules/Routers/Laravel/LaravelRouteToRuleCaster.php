<?php

namespace Loadsman\LaravelPlugin\Modules\Routers\Laravel;

use Illuminate\Routing\Route;
use Loadsman\PHP\DTO\Rule;

class LaravelRouteToRuleCaster
{
    /**
     * @param Route $route
     * @return Rule
     */
    public function cast(Route $route)
    {
        $rule = new Rule();
        $rule->setName($route->getName());
        $rule->setUri($route->uri());
        $rule->setMethods($route->methods());
        $rule->setRouter('Laravel');

        return $rule;
    }
}