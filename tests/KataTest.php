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
        $cadena="1";
        $stringSum = $calculatorString->add($cadena);
        //THEM
        $this->assertEquals(1,$stringSum);
    }

    /**
     * @test
     */
    public function add_empty_string_to_calculator()
    {
        //GIVEN
        $calculatorString= new CalculatorString();
        //WHEN
        $cadena="";
        $result = $calculatorString->add($cadena);
        //THEM
        $this->assertEquals(0,$result);
    }

    /**
     * @test
     */
    public function add_string_with_two_numbers()
    {
        //GIVEN
        $calculatorString = new CalculatorString();
        //WHEN
        $cadena = "1,2";
        $result = $calculatorString->add($cadena);
        //THEM
        $this->assertEquals(3, $result);

    }
}
