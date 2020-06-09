<?php
namespace App\Commands;
 
use App\Models\Currency;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
// use Console\App\Exceptions\ModelNotFoundException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Services\CbrService;

class LoadDataCommand extends Command
{
    private $data_provider;
    protected function configure()
    {
        $this->setName('load-data')
            ->setDescription('Loading currencies data from given provider')
            ->setHelp('Currency data automaticly loaded from provider by running this command');
            // ->addArgument('provider', InputArgument::REQUIRED, '');
        $this->data_provider = new CbrService;
            //TODO validate arguments    
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $data_count = count(Currency::all());

        $output->writeln("You have {$data_count} item(s) of currency data");
        $output->writeln("Starting load data from provider");
        if ($this->data_provider->getData()){
            $output->writeln("\xE2\x9C\x94 Data successfully loaded");
        }else{
            $output->writeln("\xE2\x9D\x8C Error occurred while loading data");
        }
        
        return 0;
    }
}