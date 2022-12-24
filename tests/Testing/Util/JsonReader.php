<?php

namespace Secode\Tests\Testing\Util;

use JsonMapper;
use JsonMapper_Exception;
use stdClass;

class JsonReader
{
    public static function get($fileName, $targetClass)
    {
        $json = file_get_contents(dirname(__DIR__, 2) . '/base/path/resources/json/' . $fileName);
        $stdClass = json_decode($json);

        if ($targetClass == 'stdClass' && is_object($stdClass)) {
            return $stdClass;
        } else {
            return self::getObjectFromStdclass($stdClass, $targetClass);
        }
    }

    private static function getObjectFromStdclass(stdClass $stdClass, $targetClass)
    {
        try {
            $mapper = new JsonMapper();
            return $mapper->map($stdClass, new $targetClass());
        } catch (JsonMapper_Exception $jsonMapper_Exception) {
            error_log($jsonMapper_Exception->getMessage());
            return null;
        }
    }

    public static function getList($fileName, $targetClass)
    {
        $json = file_get_contents(dirname(__DIR__, 2) . '/base/path/resources/' . $fileName);
        $stdClassList = json_decode($json, true);
        $arrayToReturn = [];
        foreach ($stdClassList as $stdClass) {
            $arrayToReturn[] = self::getObjectFromStdclass($stdClass, $targetClass);
        }
        return $arrayToReturn;
    }

}
