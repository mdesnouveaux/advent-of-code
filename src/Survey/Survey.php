<?php


namespace Aoc\Survey;


class Survey
{

    public function countCommonAnswer(string $groupAnswer): int
    {
        $groupAnswer = array_flip(str_split($this->cleanGroupAnswer($groupAnswer)));

        return count($groupAnswer);
    }

    public function countCommonAnswerInMultipleGroup(string $groupsAnswer): int
    {
        $groupsAnswer = $this->splitGroupsAnswer($groupsAnswer);

        $commonResponse = [];

        foreach ($groupsAnswer as $groupAnswer) {
            $commonResponse[] = $this->countCommonAnswer($groupAnswer);
        }

        return array_sum($commonResponse);
    }

    private function cleanGroupAnswer(string $groupAnswer): String
    {
        return preg_replace("#\n#", '', $groupAnswer);
    }

    private function splitGroupsAnswer(string $groupsAnswer): array
    {
        return preg_split("/\\n\\n+/", $groupsAnswer);
    }
}