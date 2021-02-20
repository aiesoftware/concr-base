<?php

namespace Concr\Base\ValueObject;

use Assert\Assertion;

class EmailAddress
{
    private string $value;

    private function __construct(string $emailAddress)
    {
        Assertion::email($emailAddress);
        $this->value = $emailAddress;
    }

    public static function fromString(string $emailAddress)
    {
        return new self($emailAddress);
    }

    public function value(): string
    {
        return $this->value;
    }
}
