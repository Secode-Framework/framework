<?php

namespace Secode\Validation;

class EntityNotFoundExceptionHandler extends Handler
{

    private static function processException($classNameToShow = null)
    {
        throw (new EntityNotFoundException($classNameToShow));
    }

    public static function validateIsNotNull($object, $classNameToShow = null)
    {
        if ($object == null) {
            self::processException($classNameToShow);
        }
    }
}
