<?php

namespace Aoc\Credentials\Validator;

use Aoc\Credentials\Passport;

class BirthValidator implements ValidatorInterface
{
    public function isValid(Passport $passport): bool
    {
        return $passport->getByr() !== null &&
            preg_match('/^[0-9]{4}$/i', $passport->getByr()) === 1 &&
            (int) $passport->getByr() >= 1920 &&
            (int) $passport->getByr() <= 2002;
    }
}