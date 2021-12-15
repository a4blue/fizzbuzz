<?php

declare(strict_types=1);

namespace A4blue\Fizzbuzz\Tests\Fizzbuzz;

use A4blue\Fizzbuzz\Fizzbuzz\Exception\InvalidArgumentException;
use A4blue\Fizzbuzz\Fizzbuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz */
    private $fizzBuzz;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @covers FizzBuzz::generateFizzBuzz
     */
    public function testNegativeNumberShouldThrowAnException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Negative Number given');
        $this->fizzBuzz->generateFizzBuzz(-1);
    }

    /**
     * @covers FizzBuzz::generateFizzBuzz
     */
    public function testMulipleOfThreeReturnsFizz(): void
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->generateFizzBuzz(3));
    }

    /**
     * @covers FizzBuzz::generateFizzBuzz
     */
    public function testMultipleOfFiveReturnsBuzz(): void
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->generateFizzBuzz(5));
    }

    /**
     * @covers FizzBuzz::generateFizzBuzz
     */
    public function testMultipleOfFiveAndThreeReturnsFizzBuzz(): void
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->generateFizzBuzz(15));
    }

    /**
     * @covers FizzBuzz::generateFizzBuzz
     */
    public function testNotMultipleOfFiveAndThreeReturnsNumber(): void
    {
        $this->assertEquals('1', $this->fizzBuzz->generateFizzBuzz(1));
    }
}
