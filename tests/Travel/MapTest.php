<?php

namespace Tests\Travel;

use Aoc\Travel\Coordinate;
use Aoc\Travel\Map;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    public function testThatTreeLocationTesterOnTreeLocationReturnTrue(): void
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

        $coordinate = new Coordinate(1, 4);

        $this->assertTrue(
            $map->isTree($coordinate)
        );
    }

    public function testThatTreeLocationTesterOnFreeLocationReturnFalse(): void
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

        $coordinate = new Coordinate(1, 3);

        $this->assertFalse(
            $map->isTree($coordinate)
        );
    }
    public function testThatTreeLocationTesterOnOutOfRangeTreeLocationReturnTrue(): void
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

        $coordinate = new Coordinate(1, 11);

        $this->assertTrue(
            $map->isTree($coordinate)
        );
    }

    public function testThatTreeLocationTesterOnOutOfRangeFreeLocationReturnFalse(): void
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

        $coordinate = new Coordinate(1, 12);

        $this->assertFalse(
            $map->isTree($coordinate)
        );
    }

    public function testThatFinishedTesterOnExactFinishedCoordinateReturnTrue(): void
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

        $coordinate = new Coordinate(10, 12);

        $this->assertTrue(
            $map->isFinished($coordinate)
        );
    }
    public function testThatFinishedTesterOnOutOfRangeFinishedCoordinateReturnTrue(): void
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

        $coordinate = new Coordinate(13, 12);

        $this->assertTrue(
            $map->isFinished($coordinate)
        );
    }
    public function testThatFinishedTesterOnUnfinishedCoordinateReturnFalse(): void
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

        $coordinate = new Coordinate(5, 12);

        $this->assertFalse(
            $map->isFinished($coordinate)
        );
    }

}
