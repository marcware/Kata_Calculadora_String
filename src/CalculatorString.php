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
        $arrayOfNumbers = explode(",", $stringOfNumbers);
        if (empty($stringOfNumbers)) {
            $result = 0;
        } elseif(count($arrayOfNumbers) > 1) {
            $result = $arrayOfNumbers[0] + $arrayOfNumbers[1];
        }
        return $result;
    }
}
