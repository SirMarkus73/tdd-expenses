<?php

namespace App\Domain;

class Expense
{
    public array $participants = [];

    public function __construct(public Person $person, public string $description, public float $amount)
    {
    }

    public function addParticipants(array $participants): void
    {
        $this->participants = array_merge($this->participants, $participants);
    }


}