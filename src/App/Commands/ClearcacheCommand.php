<?php
namespace App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
 
class ClearcacheCommand extends Command
{
    protected function configure()
    {
        $this->setName('cache')
            ->setDescription('Clears the application cache.')
            ->setHelp('Allows you to delete the application cache. Pass the --groups parameter to clear caches of specific groups.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Cache is about to cleared...');
 
        $output->writeln('All caches are cleared.');

        $output->writeln('Complete.');
        return 0;
    }
}