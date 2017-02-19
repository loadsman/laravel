<?php

namespace Loadsman\Laravel\Modules\Routers;

interface RouterContract
{
    /**
     * Router name.
     *
     * @return string
     */
    public function getName();
}