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
 * Defines methods provided by the set of rational numbers and all subsets.
 *
 * @author Michael Schneider <michael.schneider@dasined.de>
 */
interface RationalNumberInterface
{
    /**
     * @return int
     */
    public function getCounter();

    /**
     * @return int > 0
     */
    public function getDominator();
}
