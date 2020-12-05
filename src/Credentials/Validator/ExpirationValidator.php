<?php

namespace Aoc\Credentials\Validator;

use Aoc\Credentials\Passport;

class ExpirationValidator implements ValidatorInterface
{

    public function isValid(Passport $passport): bool
    {
        return $passport->getEyr() !== null &&
            preg_match('/^[0-9]{4}$/i', $passport->getEyr()) === 1 &&
            (int) $passport->getEyr() >= 2020 &&
            (int) $passport->getEyr() <= 2030;
    }
}