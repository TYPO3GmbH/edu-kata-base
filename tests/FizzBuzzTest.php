<?php

namespace T3GEdu\KataBase\Tests;

use PHPUnit\Framework\TestCase;
use T3GEdu\KataBase\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function fizzBuzzReturnsNumberForNon3or5MultipleInputDataProvider(): \Generator
    {
        yield ['one' => 1, 1];
        yield ['two' => 2, 2];
    }


    /**
     * @dataProvider fizzBuzzReturnsNumberForNon3or5MultipleInputDataProvider
     */
    public function testFizzBuzzReturnsNumberForNon3or5MultipleInput(int $input, int $expected): void
    {
        $return = (new FizzBuzz())->play($input);
        self::assertSame($expected, $return);
    }
}
