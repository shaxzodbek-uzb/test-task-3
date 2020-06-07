<?php
namespace App\Commands;
 
use App\Models\Currency;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
// use Console\App\Exceptions\ModelNotFoundException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class NotifyCommand extends Command
{
    protected function configure()
    {
        $this->setName('load-data');
            // ->setDescription('')
            // ->setHelp('')
            // ->addArgument('provider', InputArgument::REQUIRED, '');
        print_r(Currency::where('votes', '>', 1)->get());
            //TODO validate arguments    
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // $input->getArgument('')
        // $output->writeln("");
        
        return 0;
    }
}