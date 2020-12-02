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
}