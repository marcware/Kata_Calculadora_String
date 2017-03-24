<?php


namespace Kata;

class CalculatorString
{
    /**
     * @param String $stringOfNumbers
     * @return int
     */
    public function add($stringOfNumbers)
    {
        $result = $stringOfNumbers;
        $numbersOfString = explode(",", $stringOfNumbers);
        if (empty($stringOfNumbers)) {
            $result = 0;
        } elseif(count($numbersOfString) > 1) {
            $result = $numbersOfString[0] + $numbersOfString[1];
        }
        return $result;
    }
}
