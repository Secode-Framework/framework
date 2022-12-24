<?php

namespace Secode\Tests\Validation;

use PHPUnit\Framework\TestCase;
use Secode\Tests\Testing\ObjectThatHasId;
use Secode\Tests\Testing\RequiredParameterExceptionHandler;
use Secode\Validation\MandatoryFields;
use Secode\Validation\RequiredParameterException;

class RequiredParameterExceptionHandlerTest extends TestCase
{
    public function testWhenMandatoryFieldsAreNullExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setNotNullFields(['null' => null]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }

    public function testWhenMandatoryFieldsIntegerAreNotIntegerExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setIntegerFields(['integer' => 25.0]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }

    public function testWhenMandatoryFieldsNumberAreNotNumberExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setNumberFields(['number' => "78.9x"]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }

    public function testWhenMandatoryFieldsStringAreNotStringExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setStringFields(['string' => 25]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }

    public function testWhenMandatoryFieldsHasIdAreNotHasIdExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setHasIdFields([
                'hasId' => ['id' => ""],
                'hasId2' => (new ObjectThatHasId())->setId(""),
                'hasId3' => null
            ]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }


    public function testWhenMandatoryFieldsHasItemsAreEmptyExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setHasItemsFields([
                'hasItems' => [],
            ]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }

    public function testWhenMandatoryFieldsAreEmailFormattedAreNotEmailFormattedExpectThrowException()
    {
        $this->expectException(RequiredParameterException::class);

        $mandatoryFields = (new MandatoryFields())
            ->setEmailFields([
                'email' => "slickelpro@com",
            ]);

        RequiredParameterExceptionHandler::validateMandatoryFieldsFortTest($mandatoryFields);
    }

}
