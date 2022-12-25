<?php

namespace Secode\Routing;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Secode\Component\Builder\JsonResponseContentBuilder;
use Secode\Component\JsonResponseContent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendDataFail($error, $message): JsonResponse
    {
        return $this->getJsonResponseFromJsonResponseContent(
            JsonResponseContentBuilder::buildErrorWithData($error, $message));
    }

    private function getJsonResponseFromJsonResponseContent(JsonResponseContent $jsonResponseContent): JsonResponse
    {
        return new JsonResponse($jsonResponseContent->getDataArray());
    }

    public function sendMessageFail($message): JsonResponse
    {
        return $this->getJsonResponseFromJsonResponseContent(JsonResponseContentBuilder::buildError($message));
    }

    public function sendMessageSuccessful($message): JsonResponse
    {
        return $this->getJsonResponseFromJsonResponseContent(JsonResponseContentBuilder::buildSuccess($message));
    }

    public function sendDataSuccessful($data, $message): JsonResponse
    {
        return $this->getJsonResponseFromJsonResponseContent(
            JsonResponseContentBuilder::buildSuccessWithData($data, $message));
    }

}
