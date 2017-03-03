<?php

namespace Loadsman\LaravelPlugin\Modules\Rule;

use Loadsman\PHP\DTO\Rule;
use Loadsman\PHP\Http\Response;
use Loadsman\PHP\Transformers\RuleTransformer;

class RuleController extends \Illuminate\Routing\Controller
{
    public function getMany()
    {
        $rules = app(RuleRepository::class)->getAll();

        $transformer = new RuleTransformer();
        $data = array_map(function (Rule $rule) use ($transformer) {
            return $transformer->transform($rule);
        }, $rules);

        return (new Response($data))->toArray();
    }
}