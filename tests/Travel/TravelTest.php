<?php

namespace Tests\Travel;

use Aoc\Travel\Coordinate;
use Aoc\Travel\Map;
use Aoc\Travel\Slope;
use Aoc\Travel\Travel;
use PHPUnit\Framework\TestCase;

class TravelTest extends TestCase
{
    public function testThatICountTheRightAmountOfTreeDuringMyTravel(): void
    {
        $input = [
            '..##.......',
            '#...#...#..',
            '.#....#..#.',
            '..#.#...#.#',
            '.#...##..#.',
            '..#.##.....',
            '.#.#.#....#',
            '.#........#',
            '#.##...#...',
            '#...##....#',
            '.#..#...#.#',
        ];

        $map = new Map($input);
        $initialCoordinate = new Coordinate(0, 0);
        $travel = new Travel();
        $slope = new Slope($initialCoordinate, 1, 3);

        $this->assertEquals(
            7,
            $travel->numberOfEncounteredTrees($map, $slope)
        );
    }
}