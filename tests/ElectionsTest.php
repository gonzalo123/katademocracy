<?php

class ElectionsTest extends \PHPUnit_Framework_TestCase
{
    public function testVoting()
    {
        $votes = ['P1' => 3];
        $elections = new Elections($this->getVotation($votes));
        $this->assertEquals($votes, $elections->getResult());
    }

    private function getVotation($votes)
    {
        $engine = $this->getMock('VotationEngineIface');

        $engine->expects($this->any())
            ->method('processVotes')
            ->will($this->returnValue(['P1' => 3]));

        return $engine;
    }
}