<?php

namespace Codememory\Components\UnitConversion;

use Codememory\Components\UnitConversion\Units\AbstractUnit;

/**
 * Class Conversion
 * @package System\Support\UnitConversion
 *
 * @author  Codememory
 */
class Conversion
{

    public const CURRENT = 'getConvertible';
    public const UNIT_KB = 'getKb';
    public const UNIT_MB = 'getMB';
    public const UNIT_GB = 'getGb';
    public const UNIT_TB = 'getTb';
    public const UNIT_PB = 'getPb';
    public const UNIT_EB = 'getEb';
    public const UNIT_ZB = 'getZb';
    public const UNIT_YB = 'getYb';

    /**
     * @var float|int
     */
    private float|int $convertibleNumber = 0;

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
    public function setConvertibleNumber(int|float $number): Conversion
    {

        $this->convertibleNumber = $number;

        return $this;

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * & Specify from which system of units to convert
     * & the class should inherit AbstractUnit
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param AbstractUnit $unit
     *
     * @return AbstractUnit
     */
    public function from(AbstractUnit $unit): AbstractUnit
    {

        return $unit->setConvertibleNumber($this->convertibleNumber);

    }

}