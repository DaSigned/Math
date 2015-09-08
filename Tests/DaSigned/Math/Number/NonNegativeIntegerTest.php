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
 * Tests NonNegativeInteger
 *
 * @author Michael Schneider <michael.schneider@dasined.de>
 */
class NonNegativeIntegerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NonNegativeInteger
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new NonNegativeInteger();
    }

    /**
     * @covers \DaSigned\Math\Number\NonNegativeInteger::setCounter
     */
    public function testSetCounterDoesNotThrowExceptionForNonNegativeIntegerValues()
    {
        $passed = false;

        try {
            $this->object->setCounter(0);
            $passed = true;
        } catch (\Exception $exc) {
            $this->fail(
                'No exception expected, but an '.get_class($exc)
                .' with message "'.$exc->getMessage().'" was thrown'
            );
        }

        $this->assertTrue($passed);
    }

    /**
     * @covers \DaSigned\Math\Number\NonNegativeInteger::setCounter
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage DaSigned\Math\Number\NonNegativeInteger::setCounter: $value must be greater than or equal to 0
     */
    public function testSetCounterThrowsExceptionOnNegativeValues()
    {
        $this->object->setCounter(-1);
    }
}
