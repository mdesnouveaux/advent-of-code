<?php


namespace Tests\Survey;


use Aoc\Survey\Survey;
use PHPUnit\Framework\TestCase;

class SurveyTest extends TestCase
{
    public function testThatSurveyReturnTheNumberOfCommonAnswerInOneGroup()
    {
        $groupAnswer = 'abcx
abcy
abcz';

        $survey = new Survey();

        $this->assertEquals(6, $survey->countCommonAnswer($groupAnswer));

    }

    public function testThatSurveyReturnTheNumberOfCommonAnswerInSeveralGroup()
    {
        $groupsAnswer = 'abc

a
b
c

ab
ac

a
a
a
a

b';

        $survey = new Survey();

        $this->assertEquals(11, $survey->countCommonAnswerInMultipleGroup($groupsAnswer));

    }
}