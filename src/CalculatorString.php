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
        $arrayOfNumbers = $this->separateString($stringOfNumbers);

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

    private function separateString($stringOfNumbers)
    {
        $pattern = sprintf('/(%s)/i',implode('|',self::SEPARATOR));
        return preg_split($pattern,$stringOfNumbers);
    }
}
