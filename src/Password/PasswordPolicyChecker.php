<?php


namespace Aoc\Password;


class PasswordPolicyChecker
{
    public function getSledRentalValidPasswordCount(array $passwords): int
    {
        $numberOfValidPassword = 0;
        /** @var PasswordPolicy $password */
        foreach ($passwords as $password) {
            if ($password->isSledRentalValid()) {
                $numberOfValidPassword++;
            }
        }
        return $numberOfValidPassword;
    }
}