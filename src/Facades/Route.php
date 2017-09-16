<?php

namespace ILAB_Illuminate\Support\Facades;

/**
 * @method static \ILAB_Illuminate\Routing\Route get(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route post(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route put(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route delete(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route patch(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route options(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route any(string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route match(array|string $methods, string $uri, \Closure|array|string|null $action = null)
 * @method static \ILAB_Illuminate\Routing\Route prefix(string  $prefix)
 * @method static \ILAB_Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \ILAB_Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static void group(array $attributes, \Closure|string $callback)
 * @method static \ILAB_Illuminate\Routing\Route middleware(array|string|null $middleware)
 * @method static \ILAB_Illuminate\Routing\Route substituteBindings(\ILAB_Illuminate\Routing\Route $route)
 * @method static void substituteImplicitBindings(\ILAB_Illuminate\Routing\Route $route)
 *
 * @see \ILAB_Illuminate\Routing\Router
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
