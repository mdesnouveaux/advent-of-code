<?php

use Aoc\Survey\Survey;

require('vendor/autoload.php');

$input = file_get_contents( 'input/Day6/input');

$survey = new Survey();

echo "part 1: ".$survey->countCommonAnswerInMultipleGroup($input)."\n";