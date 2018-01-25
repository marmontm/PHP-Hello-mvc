<?php

namespace App\Controller;


class Model
{
    private $defaultMessage;
    private $onClickMessage;

    public function __construct()
    {
        $this->defaultMessage = 'Hello World!';
        $this->onClickMessage = 'Updated Hello World!';
    }

    /**
     * @return string
     */
    public function getDefaultMessage(): string
    {
        return $this->defaultMessage;
    }

    /**
     * @return string
     */
    public function getOnClickMessage(): string
    {
        return $this->onClickMessage;
    }
}