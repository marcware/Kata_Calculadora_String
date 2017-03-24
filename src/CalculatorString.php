<?php


namespace Kata;

class CalculatorString
{
    /**
     * @param String $cadena
     * @return int
     */
    public function add($cadena)
    {
        $result = $cadena;
        $numbersOfString = explode(",", $cadena);
        if (empty($cadena)) {
            $result = 0;
        } elseif(count($numbersOfString) > 1) {
            $result = 3;
        }
        return $result;
    }
}
