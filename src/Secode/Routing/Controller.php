<?php

namespace Secode\Routing;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Secode\Component\Builder\JsonResponseContentBuilder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendDataFail($error, $message): JsonResponse
    {
        return new JsonResponse(JsonResponseContentBuilder::buildErrorWithData($error, $message));
    }

    public function sendMessageFail($message): JsonResponse
    {
        return new JsonResponse(JsonResponseContentBuilder::buildError($message));
    }

    public function sendMessageSuccessful($message): JsonResponse
    {
        return new JsonResponse(JsonResponseContentBuilder::buildSuccess($message));
    }

    public function sendDataSuccessful($data, $message): JsonResponse
    {
        return new JsonResponse(JsonResponseContentBuilder::buildSuccessWithData($data, $message));
    }

}
