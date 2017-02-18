<?php

namespace Loadsman\Laravel\Modules\Framework;

use Illuminate\Routing\Controller;

class FrameworkController extends Controller
{
    public function getData()
    {
        return ['some' => 'data'];
    }
}