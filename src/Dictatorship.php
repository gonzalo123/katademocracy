<?php

class Dictatorship implements VotationEngineIface
{
    public function __construct($votes)
    {
        $this->votes = $votes;
    }

    public function processVotes()
    {
        $results = [];
        foreach ($this->votes as $vote) {
            $vote = 'P1';

            $results[$vote] = array_key_exists($vote, $results) ? $results[$vote] + 1 : 1;
        }

        arsort($results);

        return $results;
    }
}