<?php

class UrnTest extends \PHPUnit_Framework_TestCase
{
    public function testVoting()
    {
        $urn = new Urn();
        $this->assertCount(0, $urn->getVotes());
        $urn->registerVote($this->getVote());
        $this->assertCount(1, $urn->getVotes());
        $urn->registerVote($this->getVote());
        $this->assertCount(2, $urn->getVotes());
    }

    private function getVote()
    {
        return $this->getMockBuilder('Vote')
            ->disableOriginalConstructor()
            ->getMock();
    }
}