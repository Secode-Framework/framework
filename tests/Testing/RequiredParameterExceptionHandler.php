<?php

namespace Secode\Tests\Testing;

use Secode\Validation\MandatoryFields;
use Secode\Validation\RequiredParameterExceptionHandler as Handler;

class RequiredParameterExceptionHandler extends Handler
{
    public static function validateMandatoryFieldsFortTest(MandatoryFields $mandatoryFields): void{
        self::validateMandatoryFields($mandatoryFields);
    }
}
