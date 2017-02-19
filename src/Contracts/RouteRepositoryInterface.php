<?php

namespace Loadsman\Laravel\Contracts;

use Loadsman\Laravel\Collections\RouteCollection;

interface RouteRepositoryInterface
{
    /**
     * @return RouteCollection
     */
    public function get();
}
