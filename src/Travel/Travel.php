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

    public function productOfEncounteredTreesWithMultipleSlopeTravel(Map $map, array $slopes): int
    {
        $productOfEncounterTrees = 1;

        foreach ($slopes as $slope) {
            $productOfEncounterTrees *= $this->numberOfEncounteredTrees($map, $slope);
        }

        return $productOfEncounterTrees;
    }
}