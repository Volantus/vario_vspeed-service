<?php
use Symfony\Component\Console\Application;
use Volantus\VarioVerticalSpeed\CLI\StartCommand;

require_once __DIR__ . '/vendor/autoload.php';

$application = new Application();
$application->add(new StartCommand());
$application->run();