<?php

namespace LeagueEventApp\Command;

use League\Event\Emitter;
use LeagueEventApp\Event\FirstEvent;
use LeagueEventApp\Event\SecondEvent;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FirstCommand extends Command
{
    /** @var Emitter */
    private $emitter;

    public function __construct(Emitter $emitter)
    {
        parent::__construct();
        $this->emitter = $emitter;
    }

    protected function configure()
    {
        $this->setName('first-command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->emitter->emit('first-event');
        $this->emitter->emit('second-event');

        $this->emitter->emit(new FirstEvent());
        $this->emitter->emit(new SecondEvent('second-event'));

        return 0;
    }
}
