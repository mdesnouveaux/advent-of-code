<?php

use Aoc\Travel\Coordinate;
use Aoc\Travel\Map;
use Aoc\Travel\Slope;
use Aoc\Travel\Travel;

require('vendor/autoload.php');

$input = explode("\n", trim(file_get_contents( 'input/Day3/input')));

$map = new Map($input);
$initialCoordinate = new Coordinate(0, 0);
$travel = new Travel();
$slope = new Slope($initialCoordinate, 1, 3);

echo "part 1: ".$travel->numberOfEncounteredTrees($map, $slope)."\n";