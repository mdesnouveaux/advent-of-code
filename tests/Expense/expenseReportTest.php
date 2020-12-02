<?php

namespace  Tests\Expense;

use Aoc\Expense\ExpenseReport;
use PHPUnit\Framework\TestCase;

class expenseReportTest extends TestCase
{
    public function testThatExpenseDoubleCheckerReturnTheRightValueIfExist(): void
    {
        $expenseReport = new ExpenseReport();

        $input = [
            1721,
            979,
            366,
            299,
            675,
            1456,
        ];

        $this->assertEquals(
            514579,
            $expenseReport->checkDoubleExpense($input)
        );
    }

    public function testThatExpenseDoubleCheckerThrowExceptionIfNoSolution(): void
    {
        $this->expectException("LogicException");
        $expenseReport = new ExpenseReport();

        $input = [
            1721,
            979,
        ];
        $expenseReport->checkDoubleExpense($input);
    }

    public function testThatExpenseTripleCheckerReturnTheRightValueIfExist(): void
    {
        $expenseReport = new ExpenseReport();

        $input = [
            1721,
            979,
            366,
            299,
            675,
            1456,
        ];

        $this->assertEquals(
            241861950,
            $expenseReport->checkTripleExpense($input)
        );
    }

    public function testThatExpenseTripleCheckerThrowExceptionIfNoSolution(): void
    {
        $this->expectException("LogicException");
        $expenseReport = new ExpenseReport();

        $input = [
            1721,
            979,
            366,
        ];
        $expenseReport->checkTripleExpense($input);
    }
}