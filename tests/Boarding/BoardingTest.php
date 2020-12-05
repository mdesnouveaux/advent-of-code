<?php

namespace Tests\Boarding;

use Aoc\Boarding\Boarding;
use PHPUnit\Framework\TestCase;

class BoardingTest extends TestCase
{
    public function testBoardingConvertTheBoardingPass()
    {
        $boardingPass = 'FBFBBFFRLR';
        $expectedBoardingPass = '0101100101';

        $boarding = new Boarding();

        $this->assertEquals(
            $expectedBoardingPass,
            $boarding->convertBoardingPass($boardingPass)
        );
    }

    public function testFindColumnWithCompleteBoardingPassReturnTheRightColumn()
    {
        $expectedRow = 44;

        $boardingPass = 'FBFBBFFRLR';

        $boarding = new Boarding();

        $this->assertEquals(
            $expectedRow,
            $boarding->findRows($boarding->convertBoardingPass($boardingPass))
        );
    }

    public function testFindSeatWithCompleteBoardingPassReturnTheRightSeat()
    {
        $expectedSeat = 5;

        $boardingPass = 'FBFBBFFRLR';

        $boarding = new Boarding();

        $this->assertEquals(
            $expectedSeat,
            $boarding->findSeat($boarding->convertBoardingPass($boardingPass))
        );
    }

    public function testBoardingCanFindSeatId()
    {
        $expectedSeatId = 357;

        $boardingPass = 'FBFBBFFRLR';

        $boarding = new Boarding();

        $this->assertEquals(
            $expectedSeatId,
            $boarding->findSeatId($boardingPass)
        );
    }

    public function testBoardingCanFindSeatIds()
    {
        $expectedSeatIds[] = 357;
        $expectedSeatIds[] = 567;
        $expectedSeatIds[] = 119;
        $expectedSeatIds[] = 820;

        $boardingPasses[] = 'FBFBBFFRLR';
        $boardingPasses[] = 'BFFFBBFRRR';
        $boardingPasses[] = 'FFFBBBFRRR';
        $boardingPasses[] = 'BBFFBBFRLL';

        $boarding = new Boarding();

        $this->assertEquals(
            $expectedSeatIds,
            $boarding->findSeatIds($boardingPasses)
        );
    }
}