<?php

namespace math;

class math
{
    /**
     * Add two number.
     *
     * @param $x
     * @param $y
     * @return mixed
     */
    public function add($x, $y)
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
    public function subtract($x, $y)
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
    public function multiply($x, $y)
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
    public function divide($x, $y)
    {
        $y == 0 ? '' : $result = $x / $y;;

        return $result;
    }

    /**
     * Get remainder of division of two numbers.
     *
     * @param $x
     * @param $y
     * @return int
     */
    public function mod($x, $y)
    {
        $y == 0 ? '' : $result = $x % $y;;

        return $result;
    }
}