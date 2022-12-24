<?php

namespace Secode\Validation;

class InvalidParameterExceptionHandler extends Handler
{
    public static function validateThereAreErrors(array $error)
    {
        if (!empty($error)) {
            self::processException($error);
        }
    }

    private static function processException($error)
    {
        throw (new InvalidParameterException($error));
    }
}
