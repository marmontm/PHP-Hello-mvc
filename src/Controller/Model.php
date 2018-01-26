<?php

namespace App\Controller;


class Model
{
    private $message;

    public function __construct()
    {
        $this->message = 'Hello World!';
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
}