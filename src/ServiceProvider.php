<?php

namespace Loadsman\Laravel;
use Loadsman\Laravel\Modules\Framework\FrameworkServiceProvider;
use Loadsman\Laravel\Modules\Rule\RuleServiceProvider;
use Loadsman\Laravel\Providers\MacroServiceProvider;
use Loadsman\Laravel\Providers\RepositoryServiceProvider;
use Loadsman\Laravel\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->register(MacroServiceProvider::class);
        $this->app->register(FrameworkServiceProvider::class);
        $this->app->register(RuleServiceProvider::class);
        //$this->app->register(RouteServiceProvider::class);
        //$this->app->register(RepositoryServiceProvider::class);
    }
}
