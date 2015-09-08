<?php
/*
 * This file is part of the DaSigned Framework.
 *
 * (c) Michael Schneider <michael.schneider@dasined.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DaSigned\Math\Number;

/**
 * Represents an Integer number (ℤ).
 *
 * @author Michael Schneider <michael.schneider@dasined.de>
 */
class Integer implements RationalNumberInterface
{
    /**
     *
     * @var int
     */
    private $counter = 0;

    /**
     * @return int
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * @param int $counter
     *
     * @return \DaSigned\Math\Number\Integer
     */
    public function setCounter($counter)
    {
        if (!is_int($counter)) {
            throw new \InvalidArgumentException(
                __METHOD__.': $value must be int'
            );
        }

        $this->counter = $counter;

        return $this;
    }

    /**
     * @return int Dominator of an Integer is always 1
     */
    public function getDominator()
    {
        return 1;
    }
}
