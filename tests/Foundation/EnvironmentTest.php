<?php

namespace Secode\Tests\Foundation;

use PHPUnit\Framework\TestCase;
use Secode\Foundation\Environment;

class EnvironmentTest extends TestCase
{

    const EXPECTED_ENVIRONMENTS = ["test"];
    const ENVIRONMENTS_TO_UPDATE = ["test", "test2"];

    public function testWhenGetAllExpectEnvironments()
    {
        $arrayEnvironments = Environment::getAll();

        $this->assertEquals(self::EXPECTED_ENVIRONMENTS, $arrayEnvironments);
    }

    public function testWhenUpdateExpectUpdateEnvironments()
    {
        Environment::update(self::ENVIRONMENTS_TO_UPDATE);

        self::assertEquals(self::ENVIRONMENTS_TO_UPDATE, Environment::getAll());
    }

    protected function tearDown(): void
    {
        //ROLLBACK
        Environment::update(self::EXPECTED_ENVIRONMENTS);
    }
}
