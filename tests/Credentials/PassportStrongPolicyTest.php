<?php

namespace Tests\Credentials;

use Aoc\Credentials\Passport;
use Aoc\Credentials\PassportFactory;
use Aoc\Credentials\PassportStrongPolicy;
use Aoc\Credentials\Validator\BirthValidator;
use Aoc\Credentials\Validator\ExpirationValidator;
use Aoc\Credentials\Validator\EyeColorValidator;
use Aoc\Credentials\Validator\HairColorValidator;
use Aoc\Credentials\Validator\HeightValidator;
use Aoc\Credentials\Validator\IssueValidator;
use Aoc\Credentials\Validator\PassportIdValidator;
use PHPUnit\Framework\TestCase;

class PassportStrongPolicyTest extends TestCase
{
    public function testValidPassportCheckStrongValidation()
    {
        $passport = new Passport(
            '1980',
            '2012',
            '2030',
            '74in',
            '#623a2f',
            'ggrnry',
            '087499704',
            '147',
        );

        $passportChecker = new PassportStrongPolicy(
            new BirthValidator(),
            new IssueValidator(),
            new ExpirationValidator(),
            new HeightValidator(),
            new HairColorValidator(),
            new EyeColorValidator(),
            new PassportIdValidator()
        );

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testInvalidPassportCantCheckStrongValidation()
    {
        $passport = new Passport(
            '1926',
            '2018',
            '1972',
            '170',
            '#18171d',
            'amb',
            '186cm',
            '100',
        );

        $passportChecker = new PassportStrongPolicy(
            new BirthValidator(),
            new IssueValidator(),
            new ExpirationValidator(),
            new HeightValidator(),
            new HairColorValidator(),
            new EyeColorValidator(),
            new PassportIdValidator()
        );

        $this->assertFalse($passportChecker->isValid($passport));
    }

    public function testTheANorthPoleCredentialsCheckStrongValidation()
    {
        $passport = new Passport(
            '1944',
            '2010',
            '2021',
            '158cm',
            '#b6652a',
            'blu',
            '093154719',
            null,
        );

        $passportChecker = new PassportStrongPolicy(
            new BirthValidator(),
            new IssueValidator(),
            new ExpirationValidator(),
            new HeightValidator(),
            new HairColorValidator(),
            new EyeColorValidator(),
            new PassportIdValidator()
        );

        $this->assertTrue($passportChecker->isValid($passport));
    }

    public function testThatStrictPassportCheckerReturnZeroForInvalidPassports()
    {
        $input = 'eyr:1972 cid:100
hcl:#18171d ecl:amb hgt:170 pid:186cm iyr:2018 byr:1926

iyr:2019
hcl:#602927 eyr:1967 hgt:170cm
ecl:grn pid:012533040 byr:1946

hcl:dab227 iyr:2012
ecl:brn hgt:182cm pid:021572410 eyr:2020 byr:1992 cid:277

hgt:59cm ecl:zzz
eyr:2038 hcl:74454a iyr:2023
pid:3556412378 byr:2007';
        $passportFactory = new PassportFactory();

        $passportChecker = new PassportStrongPolicy(
            new BirthValidator(),
            new IssueValidator(),
            new ExpirationValidator(),
            new HeightValidator(),
            new HairColorValidator(),
            new EyeColorValidator(),
            new PassportIdValidator()
        );

        $this->assertEquals(
            0,
            $passportChecker->countValidPassports($passportFactory->createPassports($input))
        );
    }

    public function testThatStrictPassportCheckerReturnFourForValidPassports()
    {
        $input = 'pid:087499704 hgt:74in ecl:grn iyr:2012 eyr:2030 byr:1980
hcl:#623a2f

eyr:2029 ecl:blu cid:129 byr:1989
iyr:2014 pid:896056539 hcl:#a97842 hgt:165cm

hcl:#888785
hgt:164cm byr:2001 iyr:2015 cid:88
pid:545766238 ecl:hzl
eyr:2022

iyr:2010 hgt:158cm hcl:#b6652a ecl:blu byr:1944 eyr:2021 pid:093154719';
        $passportFactory = new PassportFactory();

        $passportChecker = new PassportStrongPolicy(
            new BirthValidator(),
            new IssueValidator(),
            new ExpirationValidator(),
            new HeightValidator(),
            new HairColorValidator(),
            new EyeColorValidator(),
            new PassportIdValidator()
        );

        $this->assertEquals(
            4,
            $passportChecker->countValidPassports($passportFactory->createPassports($input))
        );
    }

    public function testAllFields()
    {
        $input = '
byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:1919 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:2003 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2009 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2021 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2019 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2031 hgt:158cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158 hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:149cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:194cm hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:58in hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:77in hcl:#b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:b6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652 ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652aa ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#g6652a ecl:blu pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652a ecl:wat pid:093154719

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:0931547193

byr:1944 iyr:2010 eyr:2021 hgt:158cm hcl:#b6652a ecl:blu pid:93154719
        ';
        $passportFactory = new PassportFactory();

        $passportChecker = new PassportStrongPolicy(
            new BirthValidator(),
            new IssueValidator(),
            new ExpirationValidator(),
            new HeightValidator(),
            new HairColorValidator(),
            new EyeColorValidator(),
            new PassportIdValidator()
        );

        $this->assertEquals(
            1,
            $passportChecker->countValidPassports($passportFactory->createPassports($input))
        );
    }
}