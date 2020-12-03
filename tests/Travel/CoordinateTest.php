<?php

namespace Tests\Travel;

use Aoc\Travel\Coordinate;
use PHPUnit\Framework\TestCase;

class CoordinateTest extends TestCase
{
    public function testThatICanMoveFromOnePointToAnother(): void
    {
        $coordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(1, 3);

        $this->assertEquals(
            $expectedCoordinate,
            $coordinate->move()
        );
    }

    public function testThatICanMoveTwiceFromOnePointToAnother(): void
    {
        $coordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(2, 6);

        $this->assertEquals(
            $expectedCoordinate,
            $coordinate->move()->move()
        );
    }
}