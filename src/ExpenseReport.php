<?php

class ExpenseReport
{
    public function checkDoubleExpense(array $input): int
    {
        foreach ($input as $key1 => $firstItem) {
            foreach ($input as $key2 => $secondItem) {
                if ($key1 === $key2) {
                    continue;
                }
                if ($firstItem + $secondItem === 2020) {
                    return $firstItem * $secondItem;
                }
            }
        }

        throw new LogicException("No solution");
    }
}