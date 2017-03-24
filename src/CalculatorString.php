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
        if (empty($cadena)) {
            $result = 0;
        }
        return $result;
    }
}
