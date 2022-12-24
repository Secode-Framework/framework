<?php

namespace Secode\Tests\Validation;

use Illuminate\Contracts\Container\BindingResolutionException;
use PHPUnit\Framework\TestCase;
use Secode\Tests\Testing\RequiredParameterExceptionHandler;
use Secode\Validation\MandatoryFields;
use Secode\Validation\RequiredParameterException;

class HandlerTest extends TestCase
{
    public function testWhenRegisterExpectJsonResponse()
    {
        $this->expectException(RequiredParameterException::class);

        $requiredParameterExceptionHandler = new RequiredParameterExceptionHandler(app());
        $requiredParameterExceptionHandler->register();

        $mandatoryFields  = (new MandatoryFields())
            ->setEmailFields(['email' => "slickelpro@com"]);

        $requiredParameterExceptionHandler->validateMandatoryFieldsFortTest($mandatoryFields);
    }
}
