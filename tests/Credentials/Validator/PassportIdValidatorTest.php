<?php


namespace Tests\Credentials\Validator;


use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\PassportIdValidator;
use PHPUnit\Framework\TestCase;

class PassportIdValidatorTest extends TestCase
{
    public function testValidPassportIdPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            null,
            null,
            '000000001',
            null,
        );

        $passportChecker = new PassportIdValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testInvalidPassportIdPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            null,
            null,
            '0123456789',
            null,
        );

        $passportChecker = new PassportIdValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}