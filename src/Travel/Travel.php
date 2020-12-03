<?php

namespace Aoc\Travel;

class Travel
{
    public function numberOfEncounteredTrees(Coordinate $coordinate, Map $map): int
    {
        $numberOfEncounteredTrees = 0;

        while (!$map->isFinished($coordinate)) {
            $coordinate->move();
            if ($map->isTree($coordinate)) {
                $numberOfEncounteredTrees++;
            }
        }

        return $numberOfEncounteredTrees;
    }
}