<?php

namespace Secode\Component\Builder;

use Secode\Component\JsonResponseContent;
use stdClass;

class JsonResponseContentBuilder
{

    public static function buildErrorWithData(mixed $error, string $message = ''): JsonResponseContent
    {
        return (new JsonResponseContent())
            ->setError($error)
            ->setMessage($message)
            ->setSuccess(false);
    }

    public static function buildError(string $message = ''): JsonResponseContent
    {
        return (new JsonResponseContent())
            ->setMessage($message)
            ->setError(new stdClass())
            ->setSuccess(false);
    }

    public static function buildSuccessWithData(mixed $data, string $message = ''): JsonResponseContent
    {
        return (new JsonResponseContent())
            ->setMessage($message)
            ->setData($data)
            ->setSuccess(true);
    }

    public static function buildSuccess(string $message = ''): JsonResponseContent
    {
        return (new JsonResponseContent())
            ->setMessage($message)
            ->setData(new stdClass())
            ->setSuccess(true);
    }
}
