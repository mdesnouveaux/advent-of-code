<?php

namespace Tests\Password;

use Aoc\Password\PasswordPolicy;
use PHPUnit\Framework\TestCase;

class PasswordPolicyTest extends TestCase
{
    public function testThatValidPasswordReturnTrue(): void
    {
        $password = new PasswordPolicy(
            'abcde',
            'b',
            '1',
            '3'
        );

        $this->assertTrue(
            $password->isValid()
        );
    }

    public function testThatValidPasswordWithFollowedPolicyLetterReturnTrue(): void
    {
        $password = new PasswordPolicy(
            'ccccccccc',
            'c',
            '2',
            '9'
        );

        $this->assertTrue(
            $password->isValid()
        );
    }

    public function testThatInvalidPasswordReturnFalse(): void
    {
        $password = new PasswordPolicy(
            'cdefg',
            'b',
            '1',
            '3'
        );

        $this->assertFalse(
            $password->isValid()
        );
    }
}