<?php

namespace LeagueEventApp\Listener;

use League\Event\AbstractListener;
use League\Event\EventInterface;

class ListenSecondEvent extends AbstractListener
{
    public function handle(EventInterface $event)
    {
        var_dump($event);
    }
}
