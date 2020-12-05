<?php


namespace Aoc\Credentials\Validator;


use Aoc\Credentials\Passport;

class HeightValidator implements ValidatorInterface
{

    public function isValid(Passport $passport): bool
    {
        if ($passport->getHgt() === null) {
            return false;
        }

        preg_match('/^([0-9]+)(in|cm)$/i', $passport->getHgt(), $matches);

        if (count($matches) !== 3) {
            return false;
        }

        return ($matches[2] === 'cm' && $matches[1] >= 150 &&  $matches[1] <= 193) ||
            ($matches[2] === 'in' && $matches[1] >= 59 &&  $matches[1] <= 76);
    }
}