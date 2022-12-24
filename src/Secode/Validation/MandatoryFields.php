<?php

namespace Secode\Validation;

class MandatoryFields
{
    private array $notNullFields = [];
    private array $hasIdFields = [];
    private array $hasItemsFields = [];
    private array $integerFields = [];
    private array $stringFields = [];
    private array $numberFields = [];
    private array $emailFields = [];

    /**
     * @return array
     */
    public function getNotNullFields(): array
    {
        return $this->notNullFields;
    }

    /**
     * @param array $notNullFields
     * @return MandatoryFields
     */
    public function setNotNullFields(array $notNullFields): MandatoryFields
    {
        $this->notNullFields = $notNullFields;
        return $this;
    }

    /**
     * @return array
     */
    public function getHasIdFields(): array
    {
        return $this->hasIdFields;
    }

    /**
     * @param array $hasIdFields
     * @return MandatoryFields
     */
    public function setHasIdFields(array $hasIdFields): MandatoryFields
    {
        $this->hasIdFields = $hasIdFields;
        return $this;
    }

    /**
     * @return array
     */
    public function getHasItemsFields(): array
    {
        return $this->hasItemsFields;
    }

    /**
     * @param array $hasItemsFields
     * @return MandatoryFields
     */
    public function setHasItemsFields(array $hasItemsFields): MandatoryFields
    {
        $this->hasItemsFields = $hasItemsFields;
        return $this;
    }

    /**
     * @return array
     */
    public function getIntegerFields(): array
    {
        return $this->integerFields;
    }

    /**
     * @param array $integerFields
     * @return MandatoryFields
     */
    public function setIntegerFields(array $integerFields): MandatoryFields
    {
        $this->integerFields = $integerFields;
        return $this;
    }

    /**
     * @return array
     */
    public function getStringFields(): array
    {
        return $this->stringFields;
    }

    /**
     * @param array $stringFields
     * @return MandatoryFields
     */
    public function setStringFields(array $stringFields): MandatoryFields
    {
        $this->stringFields = $stringFields;
        return $this;
    }

    /**
     * @return array
     */
    public function getNumberFields(): array
    {
        return $this->numberFields;
    }

    /**
     * @param array $numberFields
     * @return MandatoryFields
     */
    public function setNumberFields(array $numberFields): MandatoryFields
    {
        $this->numberFields = $numberFields;
        return $this;
    }

    /**
     * @return array
     */
    public function getEmailFields(): array
    {
        return $this->emailFields;
    }

    /**
     * @param array $emailFields
     * @return MandatoryFields
     */
    public function setEmailFields(array $emailFields): MandatoryFields
    {
        $this->emailFields = $emailFields;
        return $this;
    }

}
