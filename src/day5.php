<?php

use Aoc\Boarding\Boarding;

require('vendor/autoload.php');

$input = explode("\n", trim(file_get_contents( 'input/Day5/input')));

$boarding = new Boarding();

echo "part 1: ".max($boarding->findSeatIds($input))."\n";