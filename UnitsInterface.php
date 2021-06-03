<?php

namespace Codememory\Components\UnitConversion;

/**
 * Interface Units
 * @package System\Support\UnitConversion
 *
 * @author  Codememory
 */
interface UnitsInterface
{

    /**
     * @return int|float
     */
    public function getKb(): int|float;

    /**
     * @return int|float
     */
    public function getMb(): int|float;

    /**
     * @return int|float
     */
    public function getGb(): int|float;

    /**
     * @return int|float
     */
    public function getTb(): int|float;

    /**
     * @return int|float
     */
    public function getPb(): int|float;

    /**
     * @return int|float
     */
    public function getEb(): int|float;

    /**
     * @return int|float
     */
    public function getZb(): int|float;

    /**
     * @return int|float
     */
    public function getYb(): int|float;

}