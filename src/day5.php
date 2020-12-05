<?php

use Aoc\Boarding\Boarding;

require('vendor/autoload.php');

$input = explode("\n", trim(file_get_contents( 'input/Day5/input')));

$boarding = new Boarding();

$seatIds = $boarding->findSeatIds($input);
echo "part 1: ".max($seatIds)."\n";
echo "part 2: ".$boarding->findMissingSeatId($seatIds)."\n";