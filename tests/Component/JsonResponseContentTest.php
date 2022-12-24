<?php

namespace Secode\Tests\Component;

use PHPUnit\Framework\TestCase;
use Secode\Component\JsonResponseContent;

class JsonResponseContentTest extends TestCase
{
    const MESSAGE_ERROR = "MENSAJE DE ERROR DE PRUEBA";

    public function testWhenAllParametersAreAsignedExpectCorrectParameters()
    {
        $jsonResponseContent = (new JsonResponseContent())
            ->setSuccess(false)
            ->setMessage(self::MESSAGE_ERROR)
            ->setError((object)[])
            ->setLogout(true)
            ;

        $this->assertFalse($jsonResponseContent->isSuccess());
        $this->assertEquals(self::MESSAGE_ERROR,$jsonResponseContent->getMessage());
        $this->assertEquals((object)[],$jsonResponseContent->getError());
        $this->assertTrue($jsonResponseContent->isLogout());
    }

}
