<?php

namespace Codememory\Components\UnitConversion\Units;

use JetBrains\PhpStorm\Pure;

/**
 * Class FromBytes
 * @package System\Support\UnitConversion\Units
 *
 * @author  Codememory
 */
final class FromBytes extends AbstractUnit
{

    /**
     * @return int|float
     */
    #[Pure] public function getKb(): int|float
    {

        return $this->calculator(10 ** 3, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getMb(): int|float
    {

        return $this->calculator(10 ** 6, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getGb(): int|float
    {

        return $this->calculator(10 ** 9, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getTb(): int|float
    {

        return $this->calculator(10 ** 12, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getPb(): int|float
    {

        return $this->calculator(10 ** 15, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getEb(): int|float
    {

        return $this->calculator(10 ** 18, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getZb(): int|float
    {

        return $this->calculator(10 ** 21, '/');

    }

    /**
     * @return int|float
     */
    #[Pure] public function getYb(): int|float
    {

        return $this->calculator(10 ** 24, '/');

    }
}