<?php

namespace Secode\Foundation;

use Illuminate\Foundation\Application as ApplicationParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Application extends ApplicationParent
{
    protected $environmentFile = ".env";
    private string $environmentId = "";

    public function __construct(Request $request, $basePath = null)
    {
        parent::__construct($basePath);
        $this->registerEnvironmentId($request);
    }

    /**
     * Register the environment id into the container.
     * @param Request $request the request
     * @return void
     */
    private function registerEnvironmentId(Request $request): void
    {
        $this->captureEnvironmentId($request);
        $this->environmentFile = $this->environmentId() . ".env";
    }

    private function captureEnvironmentId(Request $request)
    {
        try {
            $path = $request->getPathInfo();
            $this->environmentId = explode('/', $path)[1];
            if (!$this->validateEnvironment()) {
                throw new NotFoundHttpException("No se ha encontrado el environment");
            }
        } catch (NotFoundHttpException $e) {
            error_log($e->getMessage());
            throw new NotFoundHttpException($e->getMessage());
        }
    }

    private function validateEnvironment(): bool
    {
        return in_array($this->environmentId(), $this->getActiveEnvironments());
    }

    public function environmentId(): string
    {
        return $this->environmentId;
    }

    public function getActiveEnvironments(): array
    {
        return Environment::getAll();
    }

    /**
     * Get the path to the application configuration files.
     *
     * @param string $path
     * @return string
     */
    public function seCodePath(string $path = ''): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'secode' .
            ($path != '' ? DIRECTORY_SEPARATOR . $path : '');
    }

    /**
     * Get the path to the configuration cache file.
     *
     * @return string
     */
    public function getCachedConfigPath(): string
    {
        return $this->normalizeCachePath('APP_CONFIG_CACHE', 'cache\\' . $this->environmentId . '.config.php');
    }

    /**
     * Get the path to the routes cache file.
     *
     * @return string
     */
    public function getCachedRoutesPath(): string
    {
        return $this->normalizeCachePath('APP_ROUTES_CACHE', 'cache\\' . $this->environmentId . '.routes-v7.php');
    }

    public function appUrl()
    {
        return Config::get('app.url');
    }

    /**
     * Get the application namespace.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    public function getNamespace()
    {
        if (!is_null($this->namespace)) {
            return $this->namespace;
        }

        $composer = json_decode(file_get_contents($this->publicPath('composer.json')), true);

        foreach ((array)data_get($composer, 'autoload.psr-4') as $namespace => $path) {
            foreach ((array)$path as $pathChoice) {
                if (realpath($this->path()) === realpath($this->publicPath($pathChoice))) {
                    return $this->namespace = $namespace;
                }
            }
        }

        throw new RuntimeException('Unable to detect application namespace.');
    }

    /**
     * Get the path to the public / web directory.
     *
     * @param string $path
     * @return string
     */
    public function publicPath(string $path = ''): string
    {
        return dirname($this->basePath) . ($path != '' ? DIRECTORY_SEPARATOR . $path : '');
    }


    public function testsPath($path = ''):string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'tests' .
            ($path != '' ? DIRECTORY_SEPARATOR . $path : '');
    }
}

