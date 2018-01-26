<?php

namespace App\Controller;


class Model
{
    private $defaultMessage;
    private $message;

    public function __construct()
    {
        $this->defaultMessage = 'Hello World!';
        $this->message = $this->defaultMessage;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getDefaultMessage(): string
    {
        return $this->defaultMessage;
    }
}