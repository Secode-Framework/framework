<?php

namespace Secode\Tests\Component\Builder;

use PHPUnit\Framework\TestCase;
use Secode\Component\Builder\JsonResponseContentBuilder;
use stdClass;

class JsonResponseContentBuilderTest extends TestCase
{

    const  ERROR_MESSAGE = "Mensaje de error";
    const  SUCCESS_MESSAGE = "Mensaje de success";

    public function testWhenBuildErrorWithDataExpectSuccessFalse()
    {
        $jsonResponseContent = JsonResponseContentBuilder::buildErrorWithData(new stdClass(), self::ERROR_MESSAGE);

        $this->assertFalse($jsonResponseContent->isSuccess());
    }

    public function testWhenBuildErrorExpectSuccessFalse()
    {
        $jsonResponseContent = JsonResponseContentBuilder::buildError(self::ERROR_MESSAGE);

        $this->assertFalse($jsonResponseContent->isSuccess());
    }

    public function testWhenBuildSuccessWithDataExpectSuccessTrue()
    {
        $jsonResponseContent = JsonResponseContentBuilder::buildSuccessWithData(new stdClass(),self::SUCCESS_MESSAGE);

        $this->assertTrue($jsonResponseContent->isSuccess());
    }

    public function testWhenBuildSuccessExpectSuccessTrue()
    {
        $jsonResponseContent = JsonResponseContentBuilder::buildSuccess(self::SUCCESS_MESSAGE);

        $this->assertTrue($jsonResponseContent->isSuccess());
    }
}
