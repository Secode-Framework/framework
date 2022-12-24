<?php

namespace Secode\Tests\Testing\Util;

class JsonWriter
{
    public static function put($fileName, $object): void
    {
        $json = json_encode($object);
        file_put_contents(dirname(__DIR__, 2) . '/base/path/resources/json/' . $fileName, $json);
    }
}
