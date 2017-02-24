<?php

namespace Loadsman\LaravelPlugin;

use Illuminate\Container\Container;
use Loadsman\LaravelPlugin\Modules\Framework\FrameworkServiceProvider;
use Loadsman\LaravelPlugin\Modules\Rule\RuleRepository;
use Loadsman\LaravelPlugin\Modules\Rule\RuleServiceProvider;
use Loadsman\LaravelPlugin\Providers\MacroServiceProvider;
use Loadsman\LaravelPlugin\Providers\RepositoryServiceProvider;
use Loadsman\LaravelPlugin\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

class LoadsmanServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'loadsman');

        if (! $this->app['config']['loadsman.enabled']) {
            return;
        }

        $this->app->register(MacroServiceProvider::class);
        $this->app->register(FrameworkServiceProvider::class);
        $this->app->register(RuleServiceProvider::class);

        $this->app->bind(RuleRepository::class, function (Container $app) {

            $routers = [];
            foreach ($app['config']['loadsman.routers'] as $routerName){
                $routers[] = $app->make($routerName);
            }

            return new RuleRepository($routers);
        });

    }

    /**
     * @return string
     */
    private function getConfigPath()
    {
        return realpath(__DIR__.'/../').'/config/loadsman.php';
    }

    public function boot()
    {
        $paths = [$this->getConfigPath() => config_path('loadsman.php')];
        $this->publishes($paths, 'config');
    }
}
