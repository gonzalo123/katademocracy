<?php

class Elections
{
    private $results;

    public function __construct(VotationEngineIface $engine)
    {
        $this->results = $engine->processVotes();
    }

    public function getResult()
    {
        return $this->results;
    }
}