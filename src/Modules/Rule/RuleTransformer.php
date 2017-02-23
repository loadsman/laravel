<?php

namespace Loadsman\LaravelPlugin\Modules\Rule;

use Loadsman\PHP\DAO\Rule;

class RuleTransformer
{
    public function transform(Rule $rule)
    {
        return [
            'uri' => $rule->getUri(),
            'name' => $rule->getName(),
            'router' => $rule->getRouter(),
            'methods' => $rule->getMethods(),
        ];
    }
}