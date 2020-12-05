<?php


namespace Tests\Credentials;


use Aoc\Credentials\Passport;
use Aoc\Credentials\PassportFactory;
use PHPUnit\Framework\TestCase;

class PassportFactoryTest extends TestCase
{
    public function testThatGivenACredentialsStringTheFactoryCreateAPassport()
    {
        $credentials = 'ecl:gry pid:860033327 eyr:2020 hcl:#fffffd byr:1937 iyr:2017 cid:147 hgt:183cm';

        $passport = new Passport(
            '1937',
            '2017',
            '2020',
            '183cm',
            '#fffffd',
            'gry',
            '860033327',
            '147',
        );

        $passportFactory = new PassportFactory();

        $this->assertEquals(
            $passport,
            $passportFactory->createPassport($credentials)
        );
    }

    public function testThatGivenAnotherCredentialsStringTheFactoryCreateAPassport()
    {
        $credentials = 'iyr:2013 ecl:amb cid:350 eyr:2023 pid:028048884 hcl:#cfa07d byr:1929';

        $passport = new Passport(
            '1929',
            '2013',
            '2023',
            null,
            '#cfa07d',
            'amb',
            '028048884',
            '350',
        );

        $passportFactory = new PassportFactory();

        $this->assertEquals(
            $passport,
            $passportFactory->createPassport($credentials)
        );
    }

    public function testICanCleanAMultiLineCredentialsString()
    {
        $credentials = 'ecl:gry pid:860033327 eyr:2020 hcl:#fffffd
byr:1937 iyr:2017 cid:147 hgt:183cm';


        $passportFactory = new PassportFactory();

        $this->assertEquals(
            'ecl:gry pid:860033327 eyr:2020 hcl:#fffffd byr:1937 iyr:2017 cid:147 hgt:183cm',
            $passportFactory->cleanCredential($credentials)
        );
    }

    public function testThatGivenAMultiLineCredentialsStringTheFactoryCreateAPassport()
    {
        $credentials = 'ecl:gry pid:860033327 eyr:2020 hcl:#fffffd
byr:1937 iyr:2017 cid:147 hgt:183cm';

        $passport = new Passport(
            '1937',
            '2017',
            '2020',
            '183cm',
            '#fffffd',
            'gry',
            '860033327',
            '147',
        );

        $passportFactory = new PassportFactory();

        $this->assertEquals(
            $passport,
            $passportFactory->createPassport($passportFactory->cleanCredential($credentials))
        );
    }


    public function testThatGivenAMultiLineInputTheFactoryCreateAllPassports()
    {
        $input = 'ecl:gry pid:860033327 eyr:2020 hcl:#fffffd
byr:1937 iyr:2017 cid:147 hgt:183cm

iyr:2013 ecl:amb cid:350 eyr:2023 pid:028048884
hcl:#cfa07d byr:1929

hcl:#ae17e1 iyr:2013
eyr:2024
ecl:brn pid:760753108 byr:1931
hgt:179cm

hcl:#cfa07d eyr:2025 pid:166559648
iyr:2011 ecl:brn hgt:59in';

        $passports = [];

        $passports[] = new Passport(
            '1937',
            '2017',
            '2020',
            '183cm',
            '#fffffd',
            'gry',
            '860033327',
            '147',
        );
        $passports[] = new Passport(
            '1929',
            '2013',
            '2023',
            null,
            '#cfa07d',
            'amb',
            '028048884',
            '350',
        );
        $passports[] = new Passport(
            '1931',
            '2013',
            '2024',
            '179cm',
            '#ae17e1',
            'brn',
            '760753108',
            null,
        );
        $passports[] = new Passport(
            null,
            '2011',
            '2025',
            '59in',
            '#cfa07d',
            'brn',
            '166559648',
            null,
        );

        $passportFactory = new PassportFactory();

        $this->assertEquals(
            $passports,
            $passportFactory->createPassports($input)
        );
    }
}