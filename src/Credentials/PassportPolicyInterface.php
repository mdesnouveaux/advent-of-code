<?php


namespace Aoc\Credentials;


interface PassportPolicyInterface
{
    public function isValid(Passport $passport): bool;

    /**
     * @param Passport[] $passports
     * @return int
     */
    public function countValidPassports(array $passports): int;
}