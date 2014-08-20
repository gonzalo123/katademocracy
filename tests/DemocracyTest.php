<?php

class DemocracyTest extends \PHPUnit_Framework_TestCase
{
    public function testVotes()
    {
        $votes = [
            $this->getNewMockedVote("P1"),
            $this->getNewMockedVote("P2"),
            $this->getNewMockedVote("P3")
        ];

        $democracy = new Democracy($votes);

        $this->assertEquals(['P1' => 1, 'P2' => 1, 'P3' => 1], $democracy->processVotes());
    }

    public function testMoreVotes()
    {
        $votes = [
            $this->getNewMockedVote("P1"),
            $this->getNewMockedVote("P1"),
            $this->getNewMockedVote("P1")
        ];

        $democracy = new Democracy($votes);

        $this->assertEquals(['P1' => 3], $democracy->processVotes());
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