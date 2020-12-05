<?php


namespace Aoc\Credentials;


class PassportFactory
{


    public function createPassport(string $credentialsString): Passport
    {
        $credentials['byr'] = null;
        $credentials['iyr'] = null;
        $credentials['eyr'] = null;
        $credentials['hgt'] = null;
        $credentials['hcl'] = null;
        $credentials['ecl'] = null;
        $credentials['pid'] = null;
        $credentials['cid'] = null;

        $credentialList = explode(' ', $credentialsString);

        foreach ($credentialList as $field) {
            $field = explode(':', $field);
            if (count($field)!==2) {
                continue;
            }

            $credentials[$field[0]] = $field[1];
        }

        return new Passport(
            $credentials['byr'],
            $credentials['iyr'],
            $credentials['eyr'],
            $credentials['hgt'],
            $credentials['hcl'],
            $credentials['ecl'],
            $credentials['pid'],
            $credentials['cid']
        );
    }

    public function cleanCredential(string $credentials): String
    {
        return preg_replace("#\n#", ' ', $credentials);
    }

    /**
     * @param string $credentials
     * @return Passport[]
     */
    public function createPassports(string $credentials): array
    {
        $credentials = preg_split("/\\n\\n+/", $credentials);

        $passports = [];

        foreach ($credentials as $credential) {
            $passports[] = $this->createPassport($this->cleanCredential($credential));
        }

        return $passports;
    }
}