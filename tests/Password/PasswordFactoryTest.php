<?php

namespace Tests\Password;

use Aoc\Password\PasswordFactory;
use Aoc\Password\PasswordPolicy;
use PHPUnit\Framework\TestCase;

class PasswordFactoryTest extends TestCase
{
    public function testThatInputParserReturnPasswordArray(): void
    {
        $input = [
            '1-3 a: abcde',
            '1-3 b: cdefg',
            '2-9 c: ccccccccc',
        ];

        $passwords[] = new PasswordPolicy(
            'abcde',
            'a',
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

        $passwordFactory = new PasswordFactory();

        $passwordList = $passwordFactory->parseInput($input);

        $this->assertCount(3, $passwordList);

        $this->assertEquals($passwords, $passwordList);
    }

}