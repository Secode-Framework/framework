<?php

namespace Secode\Component\Builder;

use Secode\Component\JsonResponseContent;
use stdClass;

class JsonResponseContentBuilder
{
    public static function buildError(stdClass $error, string $message = ''): JsonResponseContent
    {
        return (new JsonResponseContent())
            ->setError($error)
            ->setMessage($message)
            ->setSuccess(false);
    }

    public static function buildSuccess(stdClass $data, string $message = ''): JsonResponseContent
    {
        return (new JsonResponseContent())
            ->setMessage($message)
            ->setData($data)
            ->setSuccess(true);
    }
}
