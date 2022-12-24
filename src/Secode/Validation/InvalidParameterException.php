<?php

namespace Secode\Validation;

class InvalidParameterException extends Exception
{
    protected int $status = 400;

    public function __construct($error)
    {
        $this->error = $error;
        $this->message = implode("\n", $this->error);
        parent::__construct();
    }
}
