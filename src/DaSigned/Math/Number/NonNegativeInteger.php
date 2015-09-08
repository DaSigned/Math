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
 * Restricts Integers to be greater or equal to 0 => Natural number (ℕ<sub>0</sub>).
 *
 * @author Michael Schneider <michael.schneider@dasined.de>
 */
class NonNegativeInteger extends Integer
{
    /**
     * @var int Lower bound
     */
    protected $minInclusive = 0;

    /**
     * @param int $value >= 0
     */
    public function setCounter($value)
    {
        if ($value < $this->minInclusive) {
            throw new \InvalidArgumentException(
                __METHOD__
                .': $value must be greater than or equal to '.$this->minInclusive
            );
        }

        parent::setCounter($value);
    }
}
