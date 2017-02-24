<?php

namespace Loadsman\LaravelPlugin\Modules\Framework;

use Loadsman\PHP\DTO\Framework;
use Loadsman\PHP\Http\Response;
use Loadsman\PHP\Transformers\FrameworkTransformer;

class FrameworkController extends \Illuminate\Routing\Controller
{
    public function getData()
    {
        $framework = new Framework('Laravel Framework', app()->version());

        $data = (new FrameworkTransformer())->transform($framework);

        return (new Response($data))->toArray();
    }
}