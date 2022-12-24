<?php

namespace Secode\Tests\Foundation;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Config;
use PHPUnit\Framework\TestCase;
use Secode\Foundation\Application;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApplicationTest extends TestCase
{
    const VALID_ENVIRONMENT = "test";
    const INVALID_ENVIRONMENT = "test2";
    const EXPECTED_APP_URL = "secode.com";
    const EXPECTED_CONFIG_CACHE = "\cache\\test.config.php";
    const EXPECTED_ROUTES_CACHE = "\cache\\test.routes-v7.php";
    private string $basePath;

    public function testWhenInitializeExpectDoesNotThrow()
    {
        $request = Request::create('/' . self::VALID_ENVIRONMENT);

        $app = new Application($request, $this->basePath);
        $this->assertEquals(self::VALID_ENVIRONMENT, $app->environmentId());
    }

    public function testWhenInitializeExpectThrowHttpNotFoundException()
    {
        $request = Request::create('/' . self::INVALID_ENVIRONMENT);

        $this->expectException(NotFoundHttpException::class);
        new Application($request, $this->basePath);
    }

    public function testGetSecodePaths()
    {
        $request = Request::create('/' . self::VALID_ENVIRONMENT);
        $app = new Application($request, $this->basePath);

        $config = Config::spy();
        $config->shouldReceive('get')->once()->with('app.url')->andReturn(self::EXPECTED_APP_URL);

        $this->assertEquals($app->bootstrapPath() . self::EXPECTED_CONFIG_CACHE, $app->getCachedConfigPath());
        $this->assertEquals($app->bootstrapPath() . self::EXPECTED_ROUTES_CACHE, $app->getCachedRoutesPath());
        $this->assertEquals(self::EXPECTED_APP_URL, $app->appUrl());
    }

    public function testWhenHelpersFunctionsAreCalledExpectDoesNotThrow()
    {
        $request = Request::create('/' . self::VALID_ENVIRONMENT);
        new Application($request, $this->basePath);

        $this->assertEquals(self::VALID_ENVIRONMENT, environmentId());
        $this->assertEquals(self::EXPECTED_APP_URL, appUrl());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->basePath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'path';
    }

}

