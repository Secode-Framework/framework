<?php

namespace Secode\Util;

class JsonWriter
{
    public static function set($object, $fileName): bool|int
    {
        $string = json_encode($object);
        return file_put_contents(seCodePath($fileName), $string);
    }
}
