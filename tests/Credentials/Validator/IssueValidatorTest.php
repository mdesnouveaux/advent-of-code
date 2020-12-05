<?php


namespace Tests\Credentials\Validator;


use Aoc\Credentials\Passport;
use Aoc\Credentials\Validator\IssueValidator;
use PHPUnit\Framework\TestCase;

class IssueValidatorTest extends TestCase
{
    public function testValidIssueYearPassValidation()
    {
        $passport = new Passport(
            null,
            '2010',
            null,
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new IssueValidator();

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testTooRecentIssueYearDontPassValidation()
    {
        $passport = new Passport(
            null,
            '2021',
            null,
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new IssueValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }

    public function testTooOldIssueYearDontPassValidation()
    {
        $passport = new Passport(
            null,
            '2009',
            null,
            null,
            null,
            null,
            null,
            null,
        );

        $passportChecker = new IssueValidator();

        $this->assertFalse($passportChecker->isValid($passport));
    }
}