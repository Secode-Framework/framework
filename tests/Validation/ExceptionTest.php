<?php

namespace Secode\Tests\Validation;

use Illuminate\Contracts\Container\BindingResolutionException;
use PHPUnit\Framework\TestCase;
use Secode\Validation\RequiredParameterException;

class ExceptionTest extends TestCase
{
    public function testWhenExceptionIsInitalizedExpectThrowException()
    {
        $this->expectException(BindingResolutionException::class);

        $requiredParameterException = new RequiredParameterException([]);
        $requiredParameterException->render();
    }
}
