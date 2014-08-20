<?php

include __DIR__ . '/../vendor/autoload.php';

$csv = array_map('str_getcsv', file(__DIR__ . "/list.csv"));

$urn = new Urn();

foreach ($csv as $reg) {
    $urn->registerVote(new Vote(new Person($reg[0], $reg[1]), $reg[2]));
}

$democracy = new Elections(new Democracy($urn->getVotes()));

print_r($democracy->getResult());