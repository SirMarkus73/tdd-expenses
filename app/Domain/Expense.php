<?php

namespace App\Domain;

class Expense
{
    public array $participants = [];

    public function __construct(public Person $person, public string $description, public float $amount) {}

    public function addParticipants(array $participants): void
    {
        foreach ($participants as $participant) {
            if (!in_array($participant, $this->participants)) {
                $this->participants[] = $participant;
            }
        }
    }
}
