<?php

declare(strict_types=1);

namespace A4blue\Fizzbuzz\Fizzbuzz;

use A4blue\Fizzbuzz\Fizzbuzz\Exception\InvalidArgumentException;

class FizzBuzz
{
    public function generateFizzBuzz(int $input): string
    {
        if ($input < 0) {
            throw new InvalidArgumentException('Negative Number given');
        }

        $return = '';

        if ($input % 3 === 0) {
            $return .= 'Fizz';
        }

        if ($input % 5 === 0) {
            $return .= 'Buzz';
        }

        if ($return !== '') {
            return $return;
        }

        return (string) $input;
    }
}
