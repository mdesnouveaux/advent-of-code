<?php

require('vendor/autoload.php');

$expenseReport = new ExpenseReport();

$input = array_map('intval', explode("\n", trim(file_get_contents( 'input/Day1/input'))));

echo "part 1: ".$expenseReport->checkDoubleExpense($input)."\n";