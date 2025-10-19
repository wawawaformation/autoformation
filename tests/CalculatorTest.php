<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }

    public function testDivide(): void
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->divide(6, 3));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->divide(5, 0);
    }
}
