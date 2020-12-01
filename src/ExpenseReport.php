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

    public function checkTripleExpense(array $input): int
    {
        foreach ($input as $key1 => $firstItem) {
            foreach ($input as $key2 => $secondItem) {
                if ($key1 === $key2) {
                    continue;
                }
                foreach ($input as $key3 => $thirdItem) {
                    if ($key1 === $key3 || $key2 === $key3) {
                        continue;
                    }
                    if ($firstItem + $secondItem + $thirdItem === 2020) {
                        return $firstItem * $secondItem * $thirdItem;
                    }
                }
            }
        }

        throw new LogicException("No solution");
    }
}