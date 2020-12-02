<?php


namespace Aoc\Password;


class PasswordPolicyChecker
{
    public function getValidPasswordCount(array $passwords): int
    {
        $numberOfValidPassword = 0;
        /** @var PasswordPolicy $password */
        foreach ($passwords as $password) {
            if ($password->isValid()) {
                $numberOfValidPassword++;
            }
        }
        return $numberOfValidPassword;
    }
}