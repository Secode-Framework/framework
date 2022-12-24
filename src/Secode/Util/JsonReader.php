<?php

namespace Secode\Util;

class JsonReader
{
    public static function get($fileName)
    {
        $string = file_get_contents(seCodePath($fileName));
        return json_decode($string, true);
    }
}
