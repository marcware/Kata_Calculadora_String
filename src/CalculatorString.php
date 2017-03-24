<?php


namespace Kata;

class CalculatorString
{
    const SEPARATOR = array(',','\n');

    /**
     * @param String $stringOfNumbers
     * @return int
     */
    public function add($stringOfNumbers)
    {
        $result = $stringOfNumbers;
        $pattern = sprintf('/(%s)/i',implode('|',self::SEPARATOR));
        $arrayOfNumbers = preg_split($pattern,$stringOfNumbers);


        if (empty($stringOfNumbers)) {
            $result = 0;
        } elseif(count($arrayOfNumbers) > 1) {
            $result = 0;
            foreach ($arrayOfNumbers as $number) {
                $result += $number;
            }
        }
        return $result;
    }
}
