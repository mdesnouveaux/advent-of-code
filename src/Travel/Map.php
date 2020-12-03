<?php


namespace Aoc\Travel;


class Map
{
    /** @var string[] */
    private array $grid;

    /**
     * Map constructor.
     * @param string[] $grid
     */
    public function __construct(array $grid)
    {
        $this->grid = $grid;
    }


    public function isTree(Coordinate $coordinate): bool
    {
        $lineLength = strlen($this->grid[$coordinate->getLine()]);
        return $this->grid[$coordinate->getLine()][$coordinate->getColumn()%$lineLength] === '#';
    }

    public function isFinished(Coordinate $coordinate): bool
    {
        return $coordinate->getLine() >= count($this->grid)-1;
    }
}