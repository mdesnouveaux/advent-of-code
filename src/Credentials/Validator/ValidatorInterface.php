<?php


namespace Aoc\Credentials\Validator;


use Aoc\Credentials\Passport;

interface ValidatorInterface
{
    public function isValid(Passport $passport): bool;
}