<?php

namespace Loadsman\LaravelPluginTests;

use Loadsman\LaravelPlugin\LoadsmanServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LoadsmanServiceProvider::class,
        ];
    }
}