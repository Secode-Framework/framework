<?php

namespace Secode\Foundation;

use Secode\Util\JsonReader;
use Secode\Util\JsonWriter;

class Environment
{
    const FILE_NAME = "environments.json";

    public static function getAll()
    {
        return JsonReader::get(self::FILE_NAME);
    }

    public static function update($environments)
    {
        JsonWriter::set($environments, self::FILE_NAME);
    }
}
