<?php

namespace Loadsman\LaravelPlugin\Modules\Rule;

use Loadsman\LaravelPlugin\Modules\Routers\Laravel\LaravelRouter;

class RuleRepository
{
    public function getAll()
    {
        $rules = app(LaravelRouter::class)->getRules();

        return $rules;
    }
}