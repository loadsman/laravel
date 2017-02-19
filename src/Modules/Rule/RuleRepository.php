<?php

namespace Loadsman\Laravel\Modules\Rule;

use Loadsman\Laravel\Modules\Routers\Laravel\LaravelRouter;

class RuleRepository
{
    public function getAll()
    {
        $rules = app(LaravelRouter::class)->getRules();

        return $rules;
    }
}