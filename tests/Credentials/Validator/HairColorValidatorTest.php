<?php


namespace Tests\Credentials\Validator;


use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\HairColorValidator;
use PHPUnit\Framework\TestCase;

class HairColorValidatorTest extends TestCase
{
    public function testValidHairColorPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            '#123abc',
            null,
            null,
            null,
        );

        $passportChecker = new HairColorValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }
    public function testInvalidHairHexaColorPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            '#123abz',
            null,
            null,
            null,
        );

        $passportChecker = new HairColorValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
    public function testInvalidHairColorStringPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            null,
            '123abc',
            null,
            null,
            null,
        );

        $passportChecker = new HairColorValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}