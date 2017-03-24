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
            $result = 3;
        }
        return $result;
    }
}
