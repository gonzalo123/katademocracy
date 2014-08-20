<?php

class VoteTest extends \PHPUnit_Framework_TestCase
{
    public function testNewVote()
    {
        $vote = new Vote($this->getPerson(), "P1");

        $this->assertEquals("P1", $vote->getVote());
    }

    private function getPerson()
    {
        return $this->getMockBuilder('Person')
            ->disableOriginalConstructor()
            ->getMock();
    }
}