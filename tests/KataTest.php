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
        $cadena="0";
        $stringSum = $calculatorString->add($cadena);
        //THEM
        $this->assertEquals($cadena,$stringSum);
    }
}
