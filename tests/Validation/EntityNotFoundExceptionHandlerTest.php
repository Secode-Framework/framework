<?php

namespace Secode\Tests\Validation;

use PHPUnit\Framework\TestCase;
use Secode\Component\JsonResponseContent;
use Secode\Validation\EntityNotFoundException;
use Secode\Validation\EntityNotFoundExceptionHandler;

class EntityNotFoundExceptionHandlerTest extends TestCase
{

    public function testWhenValidateIsNotNullAndParameterNullExpectThrowError()
    {
        $this->expectException(EntityNotFoundException::class);

        $object = null;

        EntityNotFoundExceptionHandler::validateIsNotNull($object);
    }

    public function testWhenValidateIsNotNullAndParameterIsNotNullExpectDoesNotThrowException()
    {
        $object = new JsonResponseContent();

        EntityNotFoundExceptionHandler::validateIsNotNull($object);

        $this->assertNotNull($object);
    }
}
