<?php

declare(strict_types=1);

namespace A4blue\Fizzbuzz\Fizzbuzz;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzCommand extends Command
{
    protected static $defaultName = 'app:fizzbuzz';

    public function __construct(
        private FizzBuzz $fizzBuzz
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        for ($i = 1;$i <= 100;$i++) {
            $output->writeln($this->fizzBuzz->generateFizzBuzz($i));
        }

        return Command::SUCCESS;
    }
}
