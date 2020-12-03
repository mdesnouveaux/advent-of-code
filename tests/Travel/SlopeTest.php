<?php

namespace Tests\Travel;

use Aoc\Travel\Coordinate;
use Aoc\Travel\Slope;
use PHPUnit\Framework\TestCase;

class SlopeTest extends TestCase
{
    public function testThatICanMoveFromOnePointToAnotherWithOneThreeSlope(): void
    {
        $initialCoordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(1, 3);

        $slope = new Slope($initialCoordinate, 1, 3);

        $slope->slide();

        $this->assertEquals(
            new Slope($expectedCoordinate, 1, 3),
            $slope
        );
    }

    public function testThatICanMoveTwiceFromOnePointToAnotherWithOneThreeSlope(): void
    {
        $initialCoordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(2, 6);

        $slope = new Slope($initialCoordinate, 1, 3);

        $slope->slide();
        $slope->slide();

        $this->assertEquals(
            new Slope($expectedCoordinate, 1, 3),
            $slope
        );
    }

    public function testThatICanMoveFromOnePointToAnotherWithTwoFiveSlope(): void
    {
        $initialCoordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(2, 5);

        $slope = new Slope($initialCoordinate, 2, 5);

        $slope->slide();

        $this->assertEquals(
            new Slope($expectedCoordinate, 2, 5),
            $slope
        );
    }

    public function testThatICanMoveTwiceFromOnePointToAnotherWithTwoFiveSlope(): void
    {
        $initialCoordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(4, 10);

        $slope = new Slope($initialCoordinate, 2, 5);

        $slope->slide();
        $slope->slide();

        $this->assertEquals(
            new Slope($expectedCoordinate, 2, 5),
            $slope
        );
    }
}