<?php

namespace Aoc\Credentials\Validator;

use Aoc\Credentials\Passport;

class IssueValidator implements ValidatorInterface
{
    /**
     * @param Passport $passport
     * @return bool
     */
    public function isValid(Passport $passport): bool
    {
        return $passport->getIyr() !== null &&
            preg_match('/^[0-9]{4}$/i', $passport->getIyr()) === 1 &&
            (int) $passport->getIyr() >= 2010 &&
            (int) $passport->getIyr() <= 2020;
    }

}