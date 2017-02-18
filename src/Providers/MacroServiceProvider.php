<?php

namespace Loadsman\Laravel\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Macroses for macroable services.
 */
class MacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        /**
         * Present controller method as `post` route.
         */
        app('router')->macro('expose',
            function ($controller = '', Array $actions) {
                foreach ($actions as $action) {
                    $this->post(snake_case($action, '-'),
                        $controller.'@'.$action);
                }
            });

        /**
         * Expose all public methods of controller.
         * @see `expose` macro /\
         */
        app('router')->macro('exposeAll', function ($controllerClassName) {
            $controllerClassReflection = new \ReflectionClass($controllerClassName);
            $publicActions = $controllerClassReflection->getMethods(\ReflectionMethod::IS_PUBLIC);
            foreach ($publicActions as $publicAction) {
                $declaringClass = $publicAction->getDeclaringClass()->getName();
                $isOwn = $declaringClass === $controllerClassName;
                if (! $isOwn) {
                    continue;
                }
                $action = $publicAction->getName();
                $this->post(snake_case($action, '-'),
                    $controllerClassName.'@'.$action);
            }
        });
    }
}