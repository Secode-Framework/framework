<?php

namespace Secode\Tests\Validation;

use PHPUnit\Framework\TestCase;
use Secode\Validation\InvalidParameterException;
use Secode\Validation\InvalidParameterExceptionHandler;

class InvalidParameterExceptionHandlerTest extends TestCase
{

    public function testWhenValidateThereAreErrorsAndParameterEmptyExpectDoesNotThrowException()
    {
        $arrayErrors = [];

        InvalidParameterExceptionHandler::validateThereAreErrors($arrayErrors);

        $this->assertEmpty($arrayErrors);
    }

    public function testWhenValidateThereAreErrorsAndParameterFilledExpectThrowException()
    {
        $this->expectException(InvalidParameterException::class);

        $arrayErrors = ['error1' => "Errorxd"];

        InvalidParameterExceptionHandler::validateThereAreErrors($arrayErrors);
    }

}
