<?php

namespace Secode\Tests\Testing;

class ObjectThatHasId
{

    private $id;

    /**
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return ObjectThatHasId
     */
    public function setId($id): ObjectThatHasId
    {
        $this->id = $id;
        return $this;
    }


}
