<?php


namespace Aoc\Credentials\Validator;


use Aoc\Credentials\Passport;

class HairColorValidator implements ValidatorInterface
{
    /**
     * @param Passport $passport
     * @return bool
     */
    public function isValid(Passport $passport): bool
    {
        return $passport->getHcl() !== null &&
            preg_match('/^#[0-9a-f]{6}$/i', $passport->getHcl()) === 1;
    }
}