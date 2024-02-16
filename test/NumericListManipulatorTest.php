<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/NumericListManipulator.php';

    class NumericListManipulatorTest extends TestCase {
        private NumericListManipulator $numericListManipulator;

        public function __construct(?string $name = null)
        {
            parent::__construct($name);
            $this->numericListManipulator = new NumericListManipulator();
        }

        /**
         * Test if the sum returned is correct.
         */
        public function testSumNumericList() {
            $this->assertEquals(6, $this->numericListManipulator->sum([2, 3, 1]));
        }

        /**
         * Test if the empty list sum returned is correct.
         */
        public function testSumEmptyNumericList() {
            $this->assertEquals(0, $this->numericListManipulator->sum([]));
        }

        /**
         * Test if the bigger number of the array is being returned.
         */
        public function testGetBiggerNumber() {
            $this->assertEquals(3, $this->numericListManipulator->getBiggerNumber([2, 3, 1]));
        }

        /**
         * Test if the bigger number of an empty list is returning 0.
         */
        public function testGetBiggerNumberFromEmptyList() {
            $this->assertEquals(0, $this->numericListManipulator->getBiggerNumber([]));
        }

        /**
         * Test if the smaller number of the array is being returned.
         */
        public function testGetSmallerNumber() {
            $this->assertEquals(1, $this->numericListManipulator->getSmallerNumber([2, 3, 1]));
        }

        /**
         * Test if the smaller number of an empty list is returning 0.
         */
        public function testGetSmallerNumberFromEmptyList() {
            $this->assertEquals(0, $this->numericListManipulator->getBiggerNumber([]));
        }

        /**
         * Test if the array elements returned are in ascending order.
         */
        public function testGetAscendingNumericList() {
            $this->assertEquals([1, 2, 3], $this->numericListManipulator->getAscendingNumericList([2, 3, 1]));
        }

        /**
         * Test if the array elements returned are in descending order.
         */
        public function testGetDescendingNumericList() {
            $this->assertEquals([3, 2, 1], $this->numericListManipulator->getDescendingNumericList([2, 3, 1]));
        }

        /**
         * Test if the even numbers of the array are being returned.
         */
        public function testGetEvenNumbers() {
            $this->assertEquals([2, 4], $this->numericListManipulator->getEvenNumbers([2, 3, 1, 4]));
        }

        /**
         * Test if the odd numbers of the array are being returned.
         */
        public function testOddNumbers() {
            $this->assertEquals([3, 1], $this->numericListManipulator->getOddNumbers([2, 3, 1]));
        }
    }
?>