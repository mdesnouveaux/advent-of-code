<?php

namespace Aoc\Credentials\Validator;

use Aoc\Credentials\Passport;

class PassportIdValidator implements ValidatorInterface
{
    public function isValid(Passport $passport): bool
    {
        return $passport->getPid() !== null &&
            preg_match('/^[0-9]{9}$/i', $passport->getPid()) === 1;
    }
}