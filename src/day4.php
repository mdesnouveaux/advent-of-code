<?php


use Aoc\Credentials\PassportChecker;
use Aoc\Credentials\PassportFactory;

require('vendor/autoload.php');

$input = file_get_contents( 'input/Day4/input');


$passportFactory = new PassportFactory();
$passportChecker = new PassportChecker();

$passports = $passportFactory->createPassports($input);

echo "part 1: ".$passportChecker->countValidPassports($passports)."\n";