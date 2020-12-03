<?php

namespace Tests\Travel;

use Aoc\Travel\Coordinate;
use PHPUnit\Framework\TestCase;

class CoordinateTest extends TestCase
{
    public function testThatICanMoveRightOneTime(): void
    {
        $coordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(0, 1);

        $coordinate->moveRight(1);

        $this->assertEquals(
            $expectedCoordinate,
            $coordinate
        );
    }    public function testThatICanMoveRightTwice(): void
    {
        $coordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(0, 3);

        $coordinate->moveRight(1);
        $coordinate->moveRight(2);

        $this->assertEquals(
            $expectedCoordinate,
            $coordinate
        );
    }    public function testThatICanMoveDownOneTime(): void
    {
        $coordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(1, 0);

        $coordinate->moveDown(1);

        $this->assertEquals(
            $expectedCoordinate,
            $coordinate
        );
    }    public function testThatICanMoveDowzTwice(): void
    {
        $coordinate = new Coordinate(0, 0);
        $expectedCoordinate = new Coordinate(3, 0);

        $coordinate->moveDown(1);
        $coordinate->moveDown(2);

        $this->assertEquals(
            $expectedCoordinate,
            $coordinate
        );
    }
}