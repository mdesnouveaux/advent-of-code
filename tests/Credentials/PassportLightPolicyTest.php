<?php


namespace Tests\Credentials;


use Aoc\Credentials\Passport;
use Aoc\Credentials\PassportLightPolicy;
use PHPUnit\Framework\TestCase;

class PassportLightPolicyTest extends TestCase
{
    public function testTheACompletePassportIsValid()
    {
        $passport = new Passport(
            '1937',
            '2017',
            '2020',
            '183cm',
            '#fffffd',
            'gry',
            '860033327',
            '147',
        );

        $passportChecker = new PassportLightPolicy();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testTheAnIncompletePassportIsNotValid()
    {
        $passport = new Passport(
            '1929',
            '2013',
            '2023',
            null,
            '#cfa07d',
            'amb',
            '028048884',
            '350',
        );

        $passportChecker = new PassportLightPolicy();

        $this->assertFalse($passportChecker->isValid($passport));
    }

    public function testTheANorthPoleCredentialsIsValid()
    {
        $passport = new Passport(
            '1931',
            '2013',
            '2024',
            '179cm',
            '#ae17e1',
            'brn',
            '760753108',
            null,
        );

        $passportChecker = new PassportLightPolicy();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testThatPassportCheckerReturnTheRightNumberOfValidPassports()
    {
        $passports = [];

        $passports[] = new Passport(
            '1937',
            '2017',
            '2020',
            '183cm',
            '#fffffd',
            'gry',
            '860033327',
            '147',
        );
        $passports[] = new Passport(
            '1929',
            '2013',
            '2023',
            null,
            '#cfa07d',
            'amb',
            '028048884',
            '350',
        );
        $passports[] = new Passport(
            '1931',
            '2013',
            '2024',
            '179cm',
            '#ae17e1',
            'brn',
            '760753108',
            null,
        );
        $passports[] = new Passport(
            null,
            '2011',
            '2025',
            '59in',
            '#cfa07d',
            'brn',
            '166559648',
            null,
        );

        $passportChecker = new PassportLightPolicy();

        $this->assertEquals(
            2,
            $passportChecker->countValidPassports($passports)
        );
    }

}