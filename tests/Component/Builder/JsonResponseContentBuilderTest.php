<?php

namespace Secode\Tests\Component\Builder;

use PHPUnit\Framework\TestCase;
use Secode\Component\Builder\JsonResponseContentBuilder;
use stdClass;

class JsonResponseContentBuilderTest extends TestCase
{

    const  ERROR_MESSAGE = "Mensaje de error";
    const  SUCCESS_MESSAGE = "Mensaje de success";

    public function testWhenBuildErrorExpectSuccessFalse()
    {
        $jsonResponseContent = JsonResponseContentBuilder::buildError(new stdClass(), self::ERROR_MESSAGE);

        $this->assertFalse($jsonResponseContent->isSuccess());
    }

    public function testWhenBuildSuccessExpectSuccessTrue()
    {
        $jsonResponseContent = JsonResponseContentBuilder::buildSuccess(new stdClass(),self::SUCCESS_MESSAGE);

        $this->assertTrue($jsonResponseContent->isSuccess());
    }
}
