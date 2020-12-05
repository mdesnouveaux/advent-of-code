<?php

namespace Tests\Credentials\Validator;

use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\BirthValidator;
use PHPUnit\Framework\TestCase;

class BirthValidatorTest extends TestCase
{
    public function testValidBirthYearPassValidation()
    {
        $passport = new Passport(
            '2002',
            null,
            null,
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new BirthValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testTooRecentBirthYearDontPassValidation()
    {
        $passport = new Passport(
            '2003',
            null,
            null,
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new BirthValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }

    public function testTooOldBirthYearDontPassValidation()
    {
        $passport = new Passport(
            '1919',
            null,
            null,
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new BirthValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}