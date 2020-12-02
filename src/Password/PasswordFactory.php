<?php

namespace Aoc\Password;


class PasswordFactory
{
    public function parseInput(array $input): array
    {
        $passwordList = [];
        foreach ($input as $item) {
            preg_match('/(\d+)-(\d+) ([a-z]): ([a-z]+)/', $item, $matches, PREG_OFFSET_CAPTURE);

            $passwordList[] = new PasswordPolicy(
                $matches[4][0],
                $matches[3][0],
                $matches[1][0],
                $matches[2][0]
            );
        }

        return $passwordList;
    }
}