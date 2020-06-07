<?php
namespace Console\App\Commands;
 
use Console\App\Models\User;
use Console\App\Models\Order;
use Console\App\Factories\NotifierFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Console\App\Exceptions\ModelNotFoundException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NotifyCommand extends Command
{
    protected function configure()
    {
        $this->setName('load-data')
            ->setDescription('')
            ->setHelp('')
            ->addArgument('provider', InputArgument::REQUIRED, '');
            
            //TODO validate arguments    
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $input->getArgument('')
        $output->writeln("");
        
        return 0;
    }
}