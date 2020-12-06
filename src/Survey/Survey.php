<?php

namespace Aoc\Survey;

class Survey
{

    public function countCommonAnswer(string $groupAnswer): int
    {
        $groupAnswer = array_flip(str_split($this->cleanGroupAnswer($groupAnswer)));

        return count($groupAnswer);
    }

    public function countIntersectAnswer(string $groupAnswer): int
    {
        $groupAnswer = $this->splitAnswers($groupAnswer);

        if (count($groupAnswer) === 1) {
            return count($groupAnswer[0]);
        }

        $groupAnswer = call_user_func_array('array_intersect', $groupAnswer);

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


    public function countIntersectAnswerInMultipleGroup(string $groupsAnswer): int
    {
        $groupsAnswer = $this->splitGroupsAnswer($groupsAnswer);

        $intersectResponse = [];

        foreach ($groupsAnswer as $groupAnswer) {
            $intersectResponse[] = $this->countIntersectAnswer($groupAnswer);
        }

        return array_sum($intersectResponse);
    }

    private function cleanGroupAnswer(string $groupAnswer): String
    {
        return preg_replace("#\n#", '', $groupAnswer);
    }

    private function splitGroupsAnswer(string $groupsAnswer): array
    {
        return preg_split("/\\n\\n+/", $groupsAnswer);
    }

    private function splitAnswers(string $groupsAnswer): array
    {
        $groupsAnswer =  preg_split("/\\n+/", $groupsAnswer);

        return array_map(
            'str_split',
            $groupsAnswer);
    }
}