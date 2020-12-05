<?php


namespace Aoc\Credentials;


class Passport
{
    private ?string $byr;
    private ?string $iyr;
    private ?string $eyr;
    private ?string $hgt;
    private ?string $hcl;
    private ?string $ecl;
    private ?string $pid;
    private ?string $cid;

    /**
     * Passport constructor.
     * @param string|null $byr
     * @param string|null $iyr
     * @param string|null $eyr
     * @param string|null $hgt
     * @param string|null $hcl
     * @param string|null $ecl
     * @param string|null $pid
     * @param string|null $cid
     */
    public function __construct(?string $byr, ?string $iyr, ?string $eyr, ?string $hgt, ?string $hcl, ?string $ecl, ?string $pid, ?string $cid)
    {
        $this->byr = $byr;
        $this->iyr = $iyr;
        $this->eyr = $eyr;
        $this->hgt = $hgt;
        $this->hcl = $hcl;
        $this->ecl = $ecl;
        $this->pid = $pid;
        $this->cid = $cid;
    }

    /**
     * @return string|null
     */
    public function getByr(): ?string
    {
        return $this->byr;
    }

    /**
     * @return string|null
     */
    public function getIyr(): ?string
    {
        return $this->iyr;
    }

    /**
     * @return string|null
     */
    public function getEyr(): ?string
    {
        return $this->eyr;
    }

    /**
     * @return string|null
     */
    public function getHgt(): ?string
    {
        return $this->hgt;
    }

    /**
     * @return string|null
     */
    public function getHcl(): ?string
    {
        return $this->hcl;
    }

    /**
     * @return string|null
     */
    public function getEcl(): ?string
    {
        return $this->ecl;
    }

    /**
     * @return string|null
     */
    public function getPid(): ?string
    {
        return $this->pid;
    }

    /**
     * @return string|null
     */
    public function getCid(): ?string
    {
        return $this->cid;
    }

}