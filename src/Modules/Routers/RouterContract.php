<?php

namespace Loadsman\LaravelPlugin\Modules\Routers;

use Loadsman\PHP\DTO\Rule;

interface RouterContract
{

    /**
     * @return Array<Rule>
     */
    public function getRules();
}
