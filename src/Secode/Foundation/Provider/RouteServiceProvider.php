<?php

namespace Secode\Foundation\Provider;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Parser;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            $parser = new Parser();
            $object = $parser->parseFile(seCodePath('routes.yml'));

            $this->getFunction($object);
            Route::group(['prefix' => environmentId()], function () {
                Route::middleware('web')
                    ->group(base_path('routes/web.php'));
            });
            Route::middleware('secode')
                ->prefix('secode')
                ->group(base_path('routes/secode.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }


    public function getFunction($object)
    {
        if ($object['type'] == 'group') {
            $prefixValue = '';
            if ($object['prefix']['type'] == 'function' && function_exists($object['prefix']['value'])) {
                $prefixValue = $object['prefix']['value']();
            } else {
                $prefixValue = $object['prefix']['value'];
            }
            $middlwares = $object['middlewares'] ?? [];

            $routeGroup = Route::group(['prefix' => $prefixValue], function () use ($object) {
                foreach ($object['function'] as $function) {
                    $this->getFunction($function);
                }
            });

            if (!empty($middlwares)) {
                $routeGroup->middleware($middlwares);
            }
        } elseif ($object['type'] == 'endpoints') {
            $this->setEndpoints($object['endpoints']);
        }
    }

    public function setEndpoints($endpoints)
    {
        foreach ($endpoints as $keyEndpoint => $endpointValues) {
            foreach ($endpointValues as $endpointValue) {
                $method = $endpointValue['method'];
                $action = $endpointValue['action'];
                $middlewares = $endpointValue['middlewares'] ?? [];

                $route = match ($method) {
                    'post' => Route::post($keyEndpoint, $action),
                    'get' => Route::get($keyEndpoint, $action),
                    'put' => Route::put($keyEndpoint, $action),
                    'delete' => Route::delete($keyEndpoint, $action),
                    default => null /* Throw exception */,
                };

                if (!empty($middlewares)) {
                    $route->middleware($middlewares);
                }
            }
        }
    }
}
