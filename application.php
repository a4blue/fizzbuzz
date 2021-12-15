#!/usr/bin/env php
<?php

use A4blue\Fizzbuzz\Fizzbuzz\FizzBuzz;
use A4blue\Fizzbuzz\Fizzbuzz\FizzBuzzCommand;
use Symfony\Component\Console\Application;

require __DIR__ . '/vendor/autoload.php';

$application = new Application();

$application->add(new FizzBuzzCommand(new FizzBuzz()));

$application->run();
