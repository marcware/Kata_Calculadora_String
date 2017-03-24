<?php


namespace Kata;

class CalculatorString
{
    const SEPARATOR = array(',', '\n');

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
        } elseif (count($arrayOfNumbers) > 1) {
            $result = 0;
            foreach ($arrayOfNumbers as $number) {
                if ($number <0){
                    throw new \Exception("Number is negative");
                }
                $result += $number;
            }
        } elseif (count($arrayOfNumbers)==1) {
            if ($arrayOfNumbers[0] <0){
                throw new \Exception("Number is negative");
            }
        }
        return $result;
    }

    private function separateString($stringOfNumbers)
    {
        $separator = $this->newSeparateString($stringOfNumbers);
        $pattern = sprintf('/(%s)/i', implode('|', $separator));

        $value= preg_split($pattern, $stringOfNumbers);
        
        return $value;
    }

    private function newSeparateString($stringOfNumbers)
    {
        if ('//' === substr($stringOfNumbers, 0, 2)) {
            return array(';');
        } else {
            return self::SEPARATOR;
        }
    }



}
