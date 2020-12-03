<?php


namespace Aoc\Travel;


class Slope
{
    private Coordinate $coordinate;
    private int $down;
    private int $right;

    /**
     * Slope constructor.
     * @param Coordinate $coordinate
     * @param int $down
     * @param int $right
     */
    public function __construct(Coordinate $coordinate, int $down, int $right)
    {
        $this->coordinate = $coordinate;
        $this->down = $down;
        $this->right = $right;
    }

    /**
     * @return Coordinate
     */
    public function getCoordinate(): Coordinate
    {
        return $this->coordinate;
    }

    /**
     * @return int
     */
    public function getDown(): int
    {
        return $this->down;
    }

    /**
     * @return int
     */
    public function getRight(): int
    {
        return $this->right;
    }

    public function slide(): void
    {
        $this->coordinate->moveDown($this->down);
        $this->coordinate->moveRight($this->right);
    }

}