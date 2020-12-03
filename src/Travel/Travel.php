<?php

namespace Aoc\Travel;

class Travel
{
    public function numberOfEncounteredTrees(Map $map, Slope $slope): int
    {
        $numberOfEncounteredTrees = 0;

        while (!$map->isFinished($slope->getCoordinate())) {
            $slope->slide();
            if ($map->isTree($slope->getCoordinate())) {
                $numberOfEncounteredTrees++;
            }
        }

        return $numberOfEncounteredTrees;
    }
}