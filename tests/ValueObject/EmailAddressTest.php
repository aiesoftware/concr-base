<?php

namespace Concr\Base\Tests\ValueObject;

use Assert\InvalidArgumentException;
use Concr\Base\ValueObject\EmailAddress;
use PHPUnit\Framework\TestCase;

class EmailAddressTest extends TestCase
{
    public function testIsValidEmail(): void
    {
        EmailAddress::fromString('not-valid-email.com');
    }
}
