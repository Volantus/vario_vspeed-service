<?php
namespace Volantus\VarioVerticalSpeed\CLI;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class StartCommand
 *
 * @package Volantus\VarioVerticalSpeed\CLI
 */
class StartCommand extends Command
{
    protected function configure()
    {
        $this->setName('start');
        $this->setDescription('Starts the vertical speed service');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {

    }
}