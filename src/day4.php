<?php

use Aoc\Credentials\PassportLightPolicy;
use Aoc\Credentials\PassportFactory;
use Aoc\Credentials\PassportStrongPolicy;
use Aoc\Credentials\Validator\BirthValidator;
use Aoc\Credentials\Validator\ExpirationValidator;
use Aoc\Credentials\Validator\EyeColorValidator;
use Aoc\Credentials\Validator\HairColorValidator;
use Aoc\Credentials\Validator\HeightValidator;
use Aoc\Credentials\Validator\IssueValidator;
use Aoc\Credentials\Validator\PassportIdValidator;

require('vendor/autoload.php');

$input = file_get_contents( 'input/Day4/input');

$passportFactory = new PassportFactory();
$passportLightPolicy = new PassportLightPolicy();
$passportStrongPolicy = new PassportStrongPolicy(
    new BirthValidator(),
    new IssueValidator(),
    new ExpirationValidator(),
    new HeightValidator(),
    new HairColorValidator(),
    new EyeColorValidator(),
    new PassportIdValidator()
);

$passports = $passportFactory->createPassports($input);

echo "part 1: ".$passportLightPolicy->countValidPassports($passports)."\n";

echo "part 2: ".$passportStrongPolicy->countValidPassports($passports)."\n";