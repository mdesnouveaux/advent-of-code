<?php

namespace Tests\Credentials\Validator;

use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\ExpirationValidator;
use PHPUnit\Framework\TestCase;

class ExpirationValidatorTest extends TestCase
{
    public function testValidExpirationYearPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            '2020',
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new ExpirationValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testTooRecentExpirationYearDontPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            '2031',
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new ExpirationValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }

    public function testTooOldExpirationYearDontPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            '2019',
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new ExpirationValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}