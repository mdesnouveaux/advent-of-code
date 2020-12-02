<?php

namespace Tests\Password;

use Aoc\Password\PasswordPolicy;
use Aoc\Password\PasswordPolicyChecker;
use PHPUnit\Framework\TestCase;

class PasswordPolicyCheckerTest extends TestCase
{
    public function testThatPasswordPolicyCheckerReturnTheRightNumberOfValidPassword(): void
    {
        $passwords[] = new PasswordPolicy(
            'abcde',
            'b',
            '1',
            '3'
        );

        $passwords[] = new PasswordPolicy(
            'cdefg',
            'b',
            '1',
            '3'
        );

        $passwords[] = new PasswordPolicy(
            'ccccccccc',
            'c',
            '2',
            '9'
        );


        $checker = new PasswordPolicyChecker();

        $this->assertEquals(2, $checker->getValidPasswordCount($passwords));
    }
}