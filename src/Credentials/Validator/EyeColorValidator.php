<?php

namespace Aoc\Credentials\Validator;

use Aoc\Credentials\Passport;

class EyeColorValidator implements ValidatorInterface
{

    public function isValid(Passport $passport): bool
    {
        return $passport->getEcl() !== null &&
            preg_match('/^amb|blu|brn|gry|grn|hzl|oth$/i', $passport->getEcl()) === 1;
    }
}