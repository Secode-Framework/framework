<?php

namespace Secode\Validation;

class RequiredParameterException extends Exception
{
    protected int $status = 400;

    public function __construct($error)
    {
        $this->error = $error;
        $this->message = implode("\n", $error);
        parent::__construct();
    }
}

