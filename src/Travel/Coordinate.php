<?php

namespace Aoc\Travel;

class Coordinate
{
    private int $line;
    private int $column;

    /**
     * Coordinate constructor.
     * @param int $line
     * @param int $column
     */
    public function __construct(int $line, int $column)
    {
        $this->line = $line;
        $this->column = $column;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    public function moveDown(int $down): void
    {
        $this->line += $down;
    }

    public function moveRight(int $right): void
    {
        $this->column += $right;
    }

}