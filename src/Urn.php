<?php

class Urn
{
    private $votes;

    public function __construct()
    {
        $this->votes = [];
    }
    
    public function registerVote(Vote $vote)
    {
        $this->votes[] = $vote;
    }

    public function getVotes()
    {
        return $this->votes;
    }
}