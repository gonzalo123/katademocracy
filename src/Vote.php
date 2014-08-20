<?php

class Vote
{
    private $person;
    private $vote;

    public function __construct(Person $person, $vote)
    {
        $this->person = $person;
        $this->vote   = $vote;
    }

    public function getVote()
    {
        return $this->vote;
    }
}