<?php

namespace LeagueEventApp\Event;

use League\Event\AbstractEvent;

class Event extends AbstractEvent
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
