<?php
namespace App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Database\Capsule\Manager as Capsule;

class MigrateCommand extends Command
{
    protected function configure()
    {
        $this->setName('migrate')
            ->setDescription('Migrate tables');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        Capsule::schema()->create('currencies', function ($table) {
            $table->increments('id');
            $table->string('code')->index();
            $table->string('code_char')->unique();
            $table->string('name');
            $table->double('rate');
            $table->timestamps();
        });

        $output->writeln('Migration Completed.');
        return 0;
    }
}