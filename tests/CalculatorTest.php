<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * ClassNameTest
 * @group group
 * @covers summary
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function testAdd()
    {
        // arrange
        $target = new Calculator();
        $expected = 2;

        // act
        $actual = $target->add(1, 1);

        // assert
        $this->assertEquals($expected, $actual);
    }

}
