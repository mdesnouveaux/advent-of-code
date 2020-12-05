<?php


namespace Tests\Credentials\Validator;


use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\HeightValidator;
use PHPUnit\Framework\TestCase;

class HeightValidatorTest extends TestCase
{
    public function testValidInchHeightPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            '60in',
            null,
            null,
            null,
            null,
        );

        $passportChecker = new HeightValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testValidCentimeterHeightPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            '190cm',
            null,
            null,
            null,
            null,
        );

        $passportChecker = new HeightValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testInvalidInchHeightPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            '190in',
            null,
            null,
            null,
            null,
        );

        $passportChecker = new HeightValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }

    public function testInvalidHeightPassValidation()
    {
        $passport = new Passport(
            null,
            null,
            null,
            '190',
            null,
            null,
            null,
            null,
        );

        $passportChecker = new HeightValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}