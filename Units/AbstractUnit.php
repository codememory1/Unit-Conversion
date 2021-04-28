<?php

namespace Codememory\Components\UnitConversion\Units;

use JetBrains\PhpStorm\Pure;
use Codememory\Components\UnitConversion\UnitsInterface;

/**
 * Class AbstractUnit
 * @package System\Support\UnitConversion\Units
 *
 * @author  Codememory
 */
abstract class AbstractUnit implements UnitsInterface
{

    /**
     * @var int|float
     */
    private int|float $convertibleNumber = 0;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * & Get the number to convert from
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return int|float
     */
    final public function getConvertible(): int|float
    {

        return $this->convertibleNumber;

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * & Set the number to be converted into some kind
     * & of system of measurements
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param int|float $number
     *
     * @return $this
     */
    final public function setConvertibleNumber(int|float $number): AbstractUnit
    {

        $this->convertibleNumber = $number;

        return $this;

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * & A method that divides a convertible number by a
     * & number to the power of a specific unit.
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param int|float $factorOrDivisor
     *
     * @return float|int
     */
    private function share(int|float $factorOrDivisor): float|int
    {

        return $this->convertibleNumber / $factorOrDivisor;

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * & Performs the same actions as the "share" method only
     * & it no longer divides, but multiplies
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param int|float $factorOrDivisor
     *
     * @return float|int
     */
    private function multiply(int|float $factorOrDivisor): float|int
    {

        return $this->convertibleNumber * $factorOrDivisor;

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * & The method performs mathematical operations between the converted
     * & number and the factor/divisor
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param int|float $factorOrDivisor
     * @param string    $operator
     *
     * @return float|int
     */
    #[Pure] final protected function calculator(int|float $factorOrDivisor, string $operator): float|int
    {

        return match ($operator) {
            '/' => $this->share($factorOrDivisor),
            '*' => $this->multiply($factorOrDivisor),
        };

    }

}