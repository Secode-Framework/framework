<?php

namespace Secode\Component;

use stdClass;

class JsonResponseContent
{
    private string $message;
    private bool $success;
    private stdClass $error;
    private stdClass $data;
    private bool $logout = false;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return JsonResponseContent
     */
    public function setMessage(string $message): JsonResponseContent
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     *
     * @return JsonResponseContent
     */
    public function setSuccess(bool $success): JsonResponseContent
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return stdClass
     */
    public function getError(): stdClass
    {
        return $this->error;
    }

    /**
     * @param stdClass $error
     *
     * @return JsonResponseContent
     */
    public function setError(stdClass $error): JsonResponseContent
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLogout(): bool
    {
        return $this->logout;
    }

    /**
     * @param bool $logout
     *
     * @return JsonResponseContent
     */
    public function setLogout(bool $logout): JsonResponseContent
    {
        $this->logout = $logout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return JsonResponseContent
     */
    public function setData(mixed $data): JsonResponseContent
    {
        $this->data = $data;
        return $this;
    }

    public function jsonSerialize(): string|bool
    {
        return json_encode($this->getDataArray());
    }

    public function getDataArray(): array
    {
        $arrayToReturn = [
            'success' => $this->success,
            'message' => $this->message,
        ];

        if ($this->success === false) {
            $arrayToReturn['error'] = $this->error;
            $arrayToReturn['logout'] = $this->logout;
        } else {
            $arrayToReturn['data'] = $this->data;
        }

        return $arrayToReturn;
    }
}
