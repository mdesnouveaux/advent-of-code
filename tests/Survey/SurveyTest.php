<?php


namespace Tests\Survey;


use Aoc\Survey\Survey;
use PHPUnit\Framework\TestCase;

class SurveyTest extends TestCase
{
    public function testThatSurveyReturnTheNumberOfUnionAnswerInOneGroup()
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

    public function testThatSurveyReturnTheNumberOfIntersectAnswerInOneGroup()
    {
        $groupAnswer = 'abcx
abcy
abcz';

        $survey = new Survey();

        $this->assertEquals(3, $survey->countIntersectAnswer($groupAnswer));
    }

    public function testThatSurveyReturnTheNumberOfIntersectAnswerInSeveralGroup()
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

        $this->assertEquals(6, $survey->countIntersectAnswerInMultipleGroup($groupsAnswer));
    }
}