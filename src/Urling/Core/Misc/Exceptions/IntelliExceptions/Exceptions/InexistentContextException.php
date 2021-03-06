<?php

namespace Urling\Core\Misc\Exceptions\IntelliExceptions\Exceptions;

use Exception;
use Throwable;

class InexistentContextException extends Exception implements ExceptionParserInterface
{
    public string $exception_message;

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $this->exception_message = $message;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public function setCustomExceptionMessage(string $message = ""): void
    {
        $this->exception_message = $message;
    }

    /**
     * @return string
     */
    public function getCustomExceptionMessage(): string
    {
        return $this->exception_message;
    }
}
