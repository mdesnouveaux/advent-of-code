<?php


use Aoc\Password\PasswordFactory;
use Aoc\Password\PasswordPolicyChecker;

require('vendor/autoload.php');

$input = explode("\n", trim(file_get_contents( 'input/Day2/input')));

$passwordFactory = new PasswordFactory();
$passwordList = $passwordFactory->parseInput($input);

$checker = new PasswordPolicyChecker();

echo "part 1: ".$checker->getSledRentalValidPasswordCount($passwordList)."\n";