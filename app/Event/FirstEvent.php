<?php

namespace LeagueEventApp\Event;

use League\Event\AbstractEvent;

class FirstEvent extends AbstractEvent
{
    public function getName()
    {
        return get_class($this);
    }
}
