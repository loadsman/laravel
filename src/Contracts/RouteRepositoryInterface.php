<?php

namespace Loadsman\LaravelPlugin\Contracts;

use Loadsman\LaravelPlugin\Collections\RouteCollection;

interface RouteRepositoryInterface
{
    /**
     * @return RouteCollection
     */
    public function get();
}
