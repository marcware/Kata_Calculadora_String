<?php


namespace Kata\Test;


use Kata\CalculatorString;

class KataTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function nothing()
    {
        $this->assertTrue(true);
    }


    /** @test */
    public function add_string_to_calculator()
    {

        //GIVEN
        $calculatorString = new CalculatorString();
        //WHEN
        $stringSum = $calculatorString->add(1);
        //THEM
        $this->assertEquals(1,$stringSum);
    }
}
