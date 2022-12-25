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

    public function throwError($error, $message): JsonResponse
    {
        return new JsonResponse(JsonResponseContentBuilder::buildError($error, $message));
    }

    public function sendMessageSuccessful($data, $message): JsonResponse
    {
        return new JsonResponse(JsonResponseContentBuilder::buildSuccess($data, $message));
    }

}
