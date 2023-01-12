<?php

namespace Secode\Validation;

use Illuminate\Http\Response;
use RuntimeException;

class Exception extends RuntimeException
{
    protected $message;
    protected int $status = 400;
    protected array $error = [];

    public function __construct()
    {
        parent::__construct($this->message, $this->status);
    }

    public function render(): Response
    {
        $arrayToSend = [
            'success' => false,
            'message' => $this->message,
            'error' => $this->error
        ];

        return response($arrayToSend, $this->status);
    }
}
