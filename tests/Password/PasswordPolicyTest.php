<?php

namespace Tests\Password;

use Aoc\Password\PasswordPolicy;
use PHPUnit\Framework\TestCase;

class PasswordPolicyTest extends TestCase
{
    public function testThatSledRentalValidPasswordReturnTrue(): void
    {
        $password = new PasswordPolicy(
            'abcde',
            'b',
            '1',
            '3'
        );

        $this->assertTrue(
            $password->isSledRentalValid()
        );
    }

    public function testThatSledRentalValidPasswordWithFollowedPolicyLetterReturnTrue(): void
    {
        $password = new PasswordPolicy(
            'ccccccccc',
            'c',
            '2',
            '9'
        );

        $this->assertTrue(
            $password->isSledRentalValid()
        );
    }

    public function testThatSledRentalInvalidPasswordReturnFalse(): void
    {
        $password = new PasswordPolicy(
            'cdefg',
            'b',
            '1',
            '3'
        );

        $this->assertFalse(
            $password->isSledRentalValid()
        );
    }
    public function testThatPasswordWithPolicyLetterInPositionOneAndNotPositionTwoIsValidByTobogganCorporationPolicy(): void
    {
        $password = new PasswordPolicy(
            'abcde',
            'a',
            '1',
            '3'
        );

        $this->assertTrue(
            $password->isTobogganCorporationValid()
        );
    }
    public function testThatPasswordWithPolicyLetterNotInPositionOneButInPositionTwoIsValidByTobogganCorporationPolicy(): void
    {
        $password = new PasswordPolicy(
            'abcde',
            'c',
            '1',
            '3'
        );

        $this->assertTrue(
            $password->isTobogganCorporationValid()
        );
    }

    public function testThatPasswordWithPolicyLetterNeitherInPositionOneAndPositionTwoIsInalidByTobogganCorporationPolicy(): void
    {
        $password = new PasswordPolicy(
            'cdefg',
            'b',
            '1',
            '3'
        );

        $this->assertFalse(
            $password->isTobogganCorporationValid()
        );
    }

    public function testThatPasswordWithPolicyLetterBothInPositionOneAndPositionTwoIsInvalidByTobogganCorporationPolicy(): void
    {
        $password = new PasswordPolicy(
            'ccccccccc',
            'c',
            '2',
            '9'
        );

        $this->assertFalse(
            $password->isTobogganCorporationValid()
        );
    }
}