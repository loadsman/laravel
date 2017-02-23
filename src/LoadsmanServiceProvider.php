<?php

namespace Loadsman\LaravelPlugin;
use Loadsman\LaravelPlugin\Modules\Framework\FrameworkServiceProvider;
use Loadsman\LaravelPlugin\Modules\Rule\RuleServiceProvider;
use Loadsman\LaravelPlugin\Providers\MacroServiceProvider;
use Loadsman\LaravelPlugin\Providers\RepositoryServiceProvider;
use Loadsman\LaravelPlugin\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

class LoadsmanServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        if (! env('APP_DEBUG')){
            return;
        }

        $this->app->register(MacroServiceProvider::class);
        $this->app->register(FrameworkServiceProvider::class);
        $this->app->register(RuleServiceProvider::class);
        //$this->app->register(RouteServiceProvider::class);
        //$this->app->register(RepositoryServiceProvider::class);
    }
}
