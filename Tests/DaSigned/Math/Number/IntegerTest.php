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
 * Tests Integer.
 *
 * @author Michael Schneider <michael.schneider@dasined.de>
 */
class IntegerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Integer
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Integer();
    }

    /**
     * The set of integer numbers is a subset of the set of rational numbers
     */
    public function testIntegerImplementsRationalNumberInterface()
    {
        $this->assertInstanceOf(
            __NAMESPACE__.'\\RationalNumberInterface',
            $this->object
        );
    }

    /**
     * @covers DaSigned\Math\Number\Integer::getDominator
     */
    public function testGetDominatorReturnIntOne()
    {
        $this->assertSame(1, $this->object->getDominator());
    }

    /**
     * @covers DaSigned\Math\Number\Integer::getCounter
     */
    public function testGetCounterAfterConstruct()
    {
        $this->assertSame(0, $this->object->getCounter());
    }

    /**
     * @covers \DaSigned\Math\Number\Integer::setCounter
     */
    public function testSetCounterIsFluent()
    {
        $this->assertSame($this->object, $this->object->setCounter(1));
    }

    /**
     * @covers DaSigned\Math\Number\Integer::getCounter
     * @covers DaSigned\Math\Number\Integer::setCounter
     */
    public function testGetCounterAfterSetCounter()
    {
        $this->assertSame(1, $this->object->setCounter(1)->getCounter());
    }

    /**
     * @covers DaSigned\Math\Number\Integer::setCounter
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage DaSigned\Math\Number\Integer::setCounter: $value must be int
     *
     * @dataProvider nonIntValueProvider
     *
     * @param mixed $nonIntValue
     */
    public function testSetCounterThrowsInvalidArgumentExceptionOnNonIntValues(
        $nonIntValue
    ) {
        $this->object->setCounter($nonIntValue);
    }

    /**
     * @return array[array[int]]
     */
    public function nonIntValueProvider()
    {
        return array(
            array('1'),
            array(1.1),
            array(new \stdClass()),
        );
    }
}
