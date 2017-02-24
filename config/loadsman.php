<?php

return [
    /**
     * Turn the whole thing on|off.
     */
    'enabled' => env('APP_DEBUG', 'false'),

    'routers' => [
        \Loadsman\LaravelPlugin\Modules\Routers\Laravel\LaravelRouter::class,
    ],
];
