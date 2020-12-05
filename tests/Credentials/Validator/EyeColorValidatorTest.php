<?php


namespace Tests\Credentials\Validator;


use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\EyeColorValidator;
use PHPUnit\Framework\TestCase;

class EyeColorValidatorTest extends TestCase
{
    public function testValidEyeColorPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            null,
            'brn',
            null,
            null,
        );

        $passportChecker = new EyeColorValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }
    public function testInvalidEyeColorPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            null,
            'wat',
            null,
            null,
        );

        $passportChecker = new EyeColorValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}