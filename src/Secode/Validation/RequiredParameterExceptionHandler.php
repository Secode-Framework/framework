<?php

namespace Secode\Validation;

abstract class RequiredParameterExceptionHandler extends Handler
{
    const HAS_NOT_BEEN_SENT = "NO HA SIDO ENVIADO";
    const CANT_BE_NULL = "NO PUEDE SER NULO";
    const MUST_BE_INTEGER = "DEBE SER UN VALOR ENTERO";
    const MUST_BE_STRING = "DEBE SER UNA CADENA";
    const THE_PARAMETER = "EL CAMPO";
    const ID = "ID";
    const SPACE = " ";
    const MUST_BE_NUMBER = "DEBE SER NUMÉRICO";
    const IS_NOT_EMAIL_FORMATTED = "NO TIENE EL FORMATO DE EMAIL";

    protected static function validateMandatoryFields(MandatoryFields $mandatoryFieldsHandler): void
    {
        $error = [];

        self::validateMandatoryFieldsAreNotNull($mandatoryFieldsHandler->getNotNullFields(), $error);

        self::validateMandatoryFieldsAreInteger($mandatoryFieldsHandler->getIntegerFields(), $error);

        self::validateMandatoryFieldsAreNumber($mandatoryFieldsHandler->getNumberFields(), $error);

        self::validateMandatoryFieldsAreString($mandatoryFieldsHandler->getStringFields(), $error);

        self::validateMandatoryFieldsHasId($mandatoryFieldsHandler->getHasIdFields(), $error);

        self::validateMandatoryFieldsHasItems($mandatoryFieldsHandler->getHasItemsFields(), $error);

        self::validateMandatoryFieldsAreEmailFormatted($mandatoryFieldsHandler->getEmailFields(), $error);

    }

    private static function validateMandatoryFieldsAreNotNull(array $notNullFields, array &$error)
    {
        foreach ($notNullFields as $fieldName => $notNullField) {
            if (!self::isNotNullMandatoryField($notNullField)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::SPACE .
                    self::CANT_BE_NULL;
            }
        }
        self::validateThereAreErrors($error);
    }

    private static function isNotNullMandatoryField(mixed $notNullField): bool
    {
        return $notNullField != null;
    }

    private static function validateThereAreErrors(array $error)
    {
        if (!empty($error)) {
            self::processException($error);
        }
    }

    private static function processException($error)
    {
        throw (new RequiredParameterException($error));
    }

    private static function validateMandatoryFieldsAreInteger(array $integerFields, array &$error)
    {
        foreach ($integerFields as $fieldName => $integerField) {
            if (!self::isInteger($integerField)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::SPACE .
                    self::MUST_BE_INTEGER;
            }
        }
        self::validateThereAreErrors($error);
    }

    private static function isInteger(mixed $integerField): bool
    {
        return is_integer($integerField);
    }

    private static function validateMandatoryFieldsAreNumber(array $numberFields, array &$error)
    {
        foreach ($numberFields as $fieldName => $numberField) {
            if (!self::isNumber($numberField)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::SPACE .
                    self::MUST_BE_NUMBER;
            }
        }
        self::validateThereAreErrors($error);
    }

    private static function isNumber(mixed $numberField): bool
    {
        return is_numeric($numberField);
    }

    private static function validateMandatoryFieldsAreString(array $stringFields, array &$error)
    {
        foreach ($stringFields as $fieldName => $stringField) {
            if (!self::isString($stringField)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::SPACE .
                    self::MUST_BE_STRING;
            }
        }

        self::validateThereAreErrors($error);
    }

    private static function isString(mixed $integerField): bool
    {
        return is_string($integerField);
    }

    private static function validateMandatoryFieldsHasId(array $hasIdFields, array &$error)
    {
        foreach ($hasIdFields as $fieldName => $hasIdField) {
            if (!self::hasIdMandatoryField($hasIdField)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::ID .
                    self::SPACE .
                    self::HAS_NOT_BEEN_SENT;
            }
        }
        self::validateThereAreErrors($error);
    }

    private static function hasIdMandatoryField(mixed $hasIdField): bool
    {
        if (is_object($hasIdField)) {
            return self::isNotNullMandatoryField($hasIdField->getId());
        } elseif (is_array($hasIdField)) {
            return self::isNotNullMandatoryField($hasIdField['id']);
        } else {
            return false;
        }
    }

    private static function validateMandatoryFieldsHasItems(array $hasItemsFields, array &$error)
    {
        foreach ($hasItemsFields as $fieldName => $hasItemsField) {
            if (!self::hasItemsMandatoryFields($hasItemsField)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::ID .
                    self::SPACE .
                    self::HAS_NOT_BEEN_SENT;
            }
        }
        self::validateThereAreErrors($error);
    }

    private static function hasItemsMandatoryFields(mixed $hasItemsField): bool
    {
        return is_array($hasItemsField) && count($hasItemsField) != 0;
    }

    private static function validateMandatoryFieldsAreEmailFormatted(array $emailFields, array $error)
    {
        foreach ($emailFields as $fieldName => $isEmailFormatted) {
            if (!self::isEmailFormatted($isEmailFormatted)) {
                $error[$fieldName] = self::THE_PARAMETER .
                    self::SPACE .
                    strtoupper($fieldName) .
                    self::SPACE .
                    self::IS_NOT_EMAIL_FORMATTED;
            }
        }
        self::validateThereAreErrors($error);
    }

    private static function isEmailFormatted($isEmailFormatted): bool
    {
        return filter_var($isEmailFormatted, FILTER_VALIDATE_EMAIL);
    }
}
