<?php

namespace Tests\Travel;

use Aoc\Travel\Coordinate;
use Aoc\Travel\Map;
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

        $this->assertEquals(
            7,
            $travel->numberOfEncounteredTrees($initialCoordinate, $map)
        );
    }
}