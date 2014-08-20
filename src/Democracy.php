<?php

class Democracy implements VotationEngineIface
{
    private $votes;

    public function __construct($votes)
    {
        $this->votes = $votes;
    }

    public function processVotes()
    {
        $results = [];
        foreach ($this->votes as $vote) {
            $vote = $vote->getVote();

            $results[$vote] = array_key_exists($vote, $results) ? $results[$vote] + 1 : 1;
        }

        arsort($results);

        return $results;
    }
}