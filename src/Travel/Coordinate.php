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

    public function move(): Coordinate
    {
        $this->line += 1;
        $this->column += 3;

        return $this;
    }

}