<?php


namespace Aoc\Credentials;


class PassportLightPolicy implements PassportPolicyInterface
{
    public function isValid(Passport $passport): bool
    {
        return $passport->getByr() !== null &&
            $passport->getIyr() !== null &&
            $passport->getEyr() !== null &&
            $passport->getHgt() !== null &&
            $passport->getHcl() !== null &&
            $passport->getEcl() !== null &&
            $passport->getPid() !== null;
    }

    /**
     * @param Passport[] $passports
     * @return int
     */
    public function countValidPassports(array $passports): int
    {
        $numberOfValidPassport = 0;

        foreach ($passports as $passport) {
            if ($this->isValid($passport)) {
                $numberOfValidPassport++;
            }
        }

        return $numberOfValidPassport;
    }
}