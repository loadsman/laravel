<?php

namespace Loadsman\LaravelPlugin\Modules\Rule;

use Loadsman\LaravelPlugin\Modules\Routers\RouterContract;

class RuleRepository
{
    /**
     * @var array<RouterContract>
     */
    private $routers;

    /**
     * RuleRepository constructor.
     * @param array $routers
     */
    public function __construct(array $routers)
    {
        $this->routers = $routers;
    }

    public function getAll()
    {
        $rules = [];
        foreach ($this->routers as $router) {
            /** @var $router RouterContract */
            $rules += $router->getRules();
        }

        return $rules;
    }
}