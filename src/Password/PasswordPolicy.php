<?php

namespace Aoc\Password;

class PasswordPolicy
{
    private string $password;
    private string $policyLetter;
    private int $policyMin;
    private int $policyMax;

    /**
     * PasswordPolicy constructor.
     * @param string $password
     * @param string $policyLetter
     * @param int $policyMin
     * @param int $policyMax
     */
    public function __construct(string $password, string $policyLetter, int $policyMin, int $policyMax)
    {
        $this->password = $password;
        $this->policyLetter = $policyLetter;
        $this->policyMin = $policyMin;
        $this->policyMax = $policyMax;
    }


    public function isSledRentalValid(): bool
    {
        $count = substr_count($this->password, $this->policyLetter);

        return $count >= $this->policyMin && $count <= $this->policyMax;
    }


    public function isTobogganCorporationValid(): bool
    {
        return $this->password[$this->policyMin-1] === $this->policyLetter xor
            $this->password[$this->policyMax-1] === $this->policyLetter;
    }

}