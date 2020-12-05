<?php

use Aoc\Credentials\PassportLightPolicy;
use Aoc\Credentials\PassportFactory;

require('vendor/autoload.php');

$input = file_get_contents( 'input/Day4/input');

$passportFactory = new PassportFactory();
$passportLightPolicy = new PassportLightPolicy();

$passports = $passportFactory->createPassports($input);

echo "part 1: ".$passportLightPolicy->countValidPassports($passports)."\n";