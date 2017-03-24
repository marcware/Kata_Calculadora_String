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

    /**
     * @test
     * @group ini
     */
    public function add_empty_string_to_calculator()
    {
        //GIVEN
        $calculatorString= new CalculatorString();
        //WHEN
        $stringOfNumbers="";
        $result = $calculatorString->add($stringOfNumbers);
        //THEM
        $this->assertEquals(0,$result);
    }

    /**
     * @test
     * @group ini
     */
    public function add_string_to_calculator()
    {

        //GIVEN
        $calculatorString = new CalculatorString();
        //WHEN
        $stringOfNumbers="1";
        $stringSum = $calculatorString->add($stringOfNumbers);
        //THEM
        $this->assertEquals(1,$stringSum);
    }



    /**
     * @test
     * @group ini
     */
    public function add_string_with_two_numbers()
    {
        //GIVEN
        $calculatorString = new CalculatorString();
        //WHEN
        $stringOfNumbers = "1,2";
        $result = $calculatorString->add($stringOfNumbers);
        //THEM
        $this->assertEquals(3, $result);

    }

    /**
     * @test
     * @group ini
     */
    public function add_string_with_multiple_numbers()
    {
        //GIVEN
        $calculatorString = new CalculatorString();
        //WHEN
        $stringOfNumbers = "1,2,3,4";
        $result = $calculatorString->add($stringOfNumbers);
        //THEM
        $this->assertEquals(10, $result);
    }

    /**
     * @test
     * @group ini
     */
    public function add_string_with_numbers_and_break()
    {
        //GIVEN
        $calculatorString =  new CalculatorString();
        //WHEN
        $stringOfNumbers = "1\n2,3";
        $result = $calculatorString->add($stringOfNumbers);
        //THEM
        $this->assertEquals(6,$result);
    }

    /**
     * @test
     * @group hard
     */
    public function add_string_with_more_separators()
    {
        //GIVEN
        $calculatorString = new CalculatorString();
        //WHEN
        $stringOfNumbers = "//;\n1;2";
        $result = $calculatorString->add($stringOfNumbers);
        //THEM
        $this->assertEquals(3,$result);
    }
}
