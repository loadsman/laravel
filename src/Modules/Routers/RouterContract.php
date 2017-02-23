<?php

namespace Loadsman\LaravelPlugin\Modules\Routers;

interface RouterContract
{
    /**
     * Router name.
     *
     * @return string
     */
    public function getName();
}