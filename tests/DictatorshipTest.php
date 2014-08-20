<?php

class DictatorshipTest extends \PHPUnit_Framework_TestCase
{
    public function testVotes()
    {
        $votes = [
            $this->getNewMockedVote("P1"),
            $this->getNewMockedVote("P2"),
            $this->getNewMockedVote("P3")
        ];

        $dictatorship = new Dictatorship($votes);

        $this->assertEquals(['P1' => 3], $dictatorship->processVotes());
    }

    public function testMoreVotes()
    {
        $votes = [
            $this->getNewMockedVote("P3"),
            $this->getNewMockedVote("P3"),
            $this->getNewMockedVote("P3")
        ];

        $dictatorship = new Dictatorship($votes);

        $this->assertEquals(['P1' => 3], $dictatorship->processVotes());
    }

    private function getNewMockedVote($vote)
    {
        $mock = $this->getMockBuilder('Vote')
            ->disableOriginalConstructor()
            ->getMock();


        $mock->expects($this->any())
            ->method('getVote')
            ->will($this->returnValue($vote));

        return $mock;
    }
}