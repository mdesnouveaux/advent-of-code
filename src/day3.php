<?php

use Aoc\Travel\Coordinate;
use Aoc\Travel\Map;
use Aoc\Travel\Travel;

require('vendor/autoload.php');

$input = explode("\n", trim(file_get_contents( 'input/Day3/input')));

$map = new Map($input);
$initialCoordinate = new Coordinate(0, 0);
$travel = new Travel();

echo "part 1: ".$travel->numberOfEncounteredTrees($initialCoordinate, $map)."\n";