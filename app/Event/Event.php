<?php

namespace LeagueEventApp\Event;


class Event extends \League\Event\Event
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
