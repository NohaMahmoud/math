<?php

namespace NOHA\Math;

class Calculator
{
    /**
     * Add two number.
     *
     * @param $x
     * @param $y
     * @return mixed
     */
    public static function add($x, $y)
    {
        return $x + $y;
    }

    /**
     * Subtract two numbers.
     *
     * @param $x
     * @param $y
     * @return mixed
     */
    public static function subtract($x, $y)
    {
        return $x - $y;
    }

    /**
     * Multiply two numbers.
     *
     * @param $x
     * @param $y
     * @return float|int
     */
    public static function multiply($x, $y)
    {
        return $x * $y;
    }

    /**
     * Divide two numbers.
     *
     * @param $x
     * @param $y
     * @return float|int
     */
    public static function divide($x, $y)
    {
        if ($y != 0) {
            return $x / $y;
        }

        return 'Denominator must not = 0';
    }

    /**
     * Get remainder of division of two numbers.
     *
     * @param $x
     * @param $y
     * @return int
     */
    public static function mod($x, $y)
    {
        if ($y != 0) {
            return $x % $y;
        }

        return 'Denominator must not = 0';
    }
}