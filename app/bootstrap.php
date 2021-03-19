<?php

use Nette\Configurator;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Configurator();
$configurator->setDebugMode(true);

$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
    ->addDirectory(__DIR__)
    ->register();

$configurator->addConfig(__DIR__ . '/config.neon');

return $configurator->createContainer();
