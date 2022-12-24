<?php

namespace Secode\Validation;

class EntityNotFoundException extends Exception
{
    const THERE_IS_NOT_THAT_ROW = "No se ha encontrado";
    const THE_ENTITY = "la entidad";
    const SPACE = " ";

    protected int $status = 404;

    public function __construct($classNameToShow = null)
    {
        $this->message = self::THERE_IS_NOT_THAT_ROW . self::SPACE . ($classNameToShow ?? self::THE_ENTITY);
        parent::__construct();
    }
}
