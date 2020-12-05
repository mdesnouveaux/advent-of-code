<?php

namespace Aoc\Boarding;


class Boarding
{
    public function convertBoardingPass(string $boardingPass): string
    {
        $boardingPass = str_replace('B', '1', $boardingPass);
        $boardingPass = str_replace('F', '0', $boardingPass);
        $boardingPass = str_replace('R', '1', $boardingPass);
        $boardingPass = str_replace('L', '0', $boardingPass);

        return $boardingPass;
    }

    public function findRows(string $binaryBoardingPass): int
    {
        return bindec(substr($binaryBoardingPass, 0, 7));
    }

    public function findSeat(string $binaryBoardingPass): int
    {
        return bindec(substr($binaryBoardingPass, 7, 3));
    }

    public function findSeatId(string $boardingPass): int
    {
        $binaryBoardingPass = $this->convertBoardingPass($boardingPass);

        return $this->findRows($binaryBoardingPass) * 8 + $this->findSeat($binaryBoardingPass);
    }

    public function findSeatIds(array $boardingPasses): array
    {
        $seatIds = [];
        foreach ($boardingPasses as $boardingPass) {
            $seatIds[] = $this->findSeatId($boardingPass);
        }
        return $seatIds;
    }
}