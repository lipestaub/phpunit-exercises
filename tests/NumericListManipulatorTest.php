<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/NumericListManipulator.php';

    class NumericListManipulatorTest extends TestCase {
        private NumericListManipulator $numericListManipulator;

        public function setUp(): void {
            $this->numericListManipulator = new NumericListManipulator();
        }

        /**
         * Test if passing invalid values to the sum function throws an exception.
         */
        public function testSumThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->numericListManipulator->sum([2, true, 1]);
        }

        /**
         * Test if the positive numbers sum returned is correct.
         */
        public function testSumPositiveNumericList() {
            $this->assertEquals(6, $this->numericListManipulator->sum([2, 3, 1]));
        }

        /**
         * Test if the negative numbers sum returned is correct.
         */
        public function testSumNegativeNumericList() {
            $this->assertEquals(-6, $this->numericListManipulator->sum([-2, -3, -1]));
        }

        /**
         * Test if the mixed numbers sum returned is correct.
         */
        public function testSumMixedNumericList() {
            $this->assertEquals(4, $this->numericListManipulator->sum([2, 3, -1]));
        }

        /**
         * Test if the mixed numbers with zero values sum returned is correct.
         */
        public function testSumMixedNumericListWithZeroValues() {
            $this->assertEquals(4, $this->numericListManipulator->sum([2, 0, 3, -1, 0]));
        }

        /**
         * Test if the empty list sum returned is correct.
         */
        public function testSumEmptyNumericList() {
            $this->assertEquals(0, $this->numericListManipulator->sum([]));
        }

        /**
         * Test if passing invalid values to the getBiggerNumber function throws an exception.
         */
        public function testGetBiggerNumberThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->assertEquals(3, $this->numericListManipulator->getBiggerNumber([2, 'a', 1]));
        }

        /**
         * Test if the bigger number of the positive numeric list is being returned.
         */
        public function testGetBiggerNumberFromPositiveNumericList() {
            $this->assertEquals(3, $this->numericListManipulator->getBiggerNumber([2, 3, 1]));
        }

        /**
         * Test if the bigger number of the negative numeric list is being returned.
         */
        public function testGetBiggerNumberFromNegativeNumericList() {
            $this->assertEquals(-1, $this->numericListManipulator->getBiggerNumber([-2, -3, -1]));
        }

        /**
         * Test if the bigger number of the mixed numeric list is being returned.
         */
        public function testGetBiggerNumberFromMixedNumericList() {
            $this->assertEquals(3, $this->numericListManipulator->getBiggerNumber([-2, 3, -1]));
        }
    
        /**
         * Test if the bigger number of the mixed numeric list with zero values is being returned.
         */
        public function testGetBiggerNumberFromMixedNumericListWithZeroValues() {
            $this->assertEquals(3, $this->numericListManipulator->getBiggerNumber([-2, 0, 3, -1]));
        }

        /**
         * Test if the bigger number of an empty list is returning 0.
         */
        public function testGetBiggerNumberFromEmptyList() {
            $this->assertEquals(0, $this->numericListManipulator->getBiggerNumber([]));
        }

        /**
         * Test if passing invalid values to the getSmallerNumber function throws an exception.
         */
        public function testGetSmallerNumberThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->assertEquals(1, $this->numericListManipulator->getSmallerNumber([2, 'adwds', 1]));
        }

        /**
         * Test if the smaller number of the positive numeric list is being returned.
         */
        public function testGetSmallerNumberFromPositiveNumericList() {
            $this->assertEquals(1, $this->numericListManipulator->getSmallerNumber([2, 3, 1]));
        }

        /**
         * Test if the smaller number of the negative numeric list is being returned.
         */
        public function testGetSmallerNumberFromNegativeNumericList() {
            $this->assertEquals(-3, $this->numericListManipulator->getSmallerNumber([-2, -3, -1]));
        }

        /**
         * Test if the smaller number of the mixed numeric list is being returned.
         */
        public function testGetSmallerNumberFromMixedNumericList() {
            $this->assertEquals(-2, $this->numericListManipulator->getSmallerNumber([-2, 3, -1]));
        }

        /**
         * Test if the smaller number of the mixed numeric list with zero values is being returned.
         */
        public function testGetSmallerNumberFromMixedNumericListWithZeroValues() {
            $this->assertEquals(-2, $this->numericListManipulator->getSmallerNumber([0, -2, 3, -1]));
        }

        /**
         * Test if the smaller number of an empty list is returning 0.
         */
        public function testGetSmallerNumberFromEmptyList() {
            $this->assertEquals(0, $this->numericListManipulator->getSmallerNumber([]));
        }

        /**
         * Test if passing invalid values to the getAscendingNumericList function throws an exception.
         */
        public function testGetAscendingThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->assertEquals([1, 2, 3], $this->numericListManipulator->getAscendingNumericList([2, false, 1]));
        }

        /**
         * Test if the positive numeric list elements returned are in ascending order.
         */
        public function testGetAscendingPositiveNumericList() {
            $this->assertEquals([1, 2, 3], $this->numericListManipulator->getAscendingNumericList([2, 3, 1]));
        }

        /**
         * Test if the negative numeric list elements returned are in ascending order.
         */
        public function testGetAscendingNegativeNumericList() {
            $this->assertEquals([-3, -2, -1], $this->numericListManipulator->getAscendingNumericList([-2, -3, -1]));
        }

        /**
         * Test if the mixed numeric list elements returned are in ascending order.
         */
        public function testGetAscendingMixedNumericList() {
            $this->assertEquals([-2, -1, 3], $this->numericListManipulator->getAscendingNumericList([-2, 3, -1]));
        }

        /**
         * Test if the mixed numeric list with zero values elements returned are in ascending order.
         */
        public function testGetAscendingMixedNumericListWithZeroValues() {
            $this->assertEquals([-2, -1, 0, 3], $this->numericListManipulator->getAscendingNumericList([0, -2, 3, -1]));
        }

        /**
         * Test if an empty array is returned when passing a empty list to the getAscendingNumericList().
         */
        public function testGetAscendingEmptyNumericList() {
            $this->assertEquals([], $this->numericListManipulator->getAscendingNumericList([]));
        }

        /**
         * Test if passing invalid values to the getDescendingNumericList function throws an exception.
         */
        public function testGetDescendingThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->assertEquals([1, 2, 3], $this->numericListManipulator->getDescendingNumericList([2, false, 1]));
        }

        /**
         * Test if the positive numeric list elements returned are in descending order.
         */
        public function testGetDescendingPositiveNumericList() {
            $this->assertEquals([3, 2, 1], $this->numericListManipulator->getDescendingNumericList([2, 3, 1]));
        }

        /**
         * Test if the negative numeric list elements returned are in descending order.
         */
        public function testGetDescendingNegativeNumericList() {
            $this->assertEquals([-1, -2, -3], $this->numericListManipulator->getDescendingNumericList([-2, -3, -1]));
        }

        /**
         * Test if the mixed numeric list elements returned are in descending order.
         */
        public function testGetDescendingMixedNumericList() {
            $this->assertEquals([3, -1, -2], $this->numericListManipulator->getDescendingNumericList([-2, 3, -1]));
        }

        /**
         * Test if the mixed numeric list with zero values elements returned are in descending order.
         */
        public function testGetDescendingMixedNumericListWithZeroValues() {
            $this->assertEquals([3, 0, -1, -2], $this->numericListManipulator->getDescendingNumericList([-2, 0, 3, -1]));
        }

        /**
         * Test if an empty array is returned when passing a empty list to the getDescendingNumericList().
         */
        public function testGetDescendingEmptyNumericList() {
            $this->assertEquals([], $this->numericListManipulator->getDescendingNumericList([]));
        }

        /**
         * Test if passing invalid values to the getEvenNumbers function throws an exception.
         */
        public function testGetEvenNumbersThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->assertEquals([2], $this->numericListManipulator->getEvenNumbers([2, false, 1]));
        }

        /**
         * Test if the even numbers of the positive numeric list are being returned.
         */
        public function testGetEvenNumbersFromPostiveNumericList() {
            $this->assertEquals([2, 4], $this->numericListManipulator->getEvenNumbers([2, 3, 1, 4]));
        }

        /**
         * Test if the even numbers of the negative numeric list are being returned.
         */
        public function testGetEvenNumbersFromNegativeNumericList() {
            $this->assertEquals([-2, -4], $this->numericListManipulator->getEvenNumbers([-2, -3, -1, -4]));
        }

        /**
         * Test if the even numbers of the mixed numeric list are being returned.
         */
        public function testGetEvenNumbersFromMixedNumericList() {
            $this->assertEquals([2, -4], $this->numericListManipulator->getEvenNumbers([2, 3, -1, -4]));
        }

        /**
         * Test if the even numbers of the mixed numeric list with zero values are being returned.
         */
        public function testGetEvenNumbersFromMixedNumericListWithZeroValues() {
            $this->assertEquals([2, 0, -4], $this->numericListManipulator->getEvenNumbers([2, 0, 3, -1, -4]));
        }

        /**
         * Test if an empty array is returned when passing a empty list to the getEvenNumbers().
         */
        public function testGetEvenNumbersFromEmptyNumericList() {
            $this->assertEquals([], $this->numericListManipulator->getEvenNumbers([]));
        }

        /**
         * Test if passing invalid values to the getEvenNumbers function throws an exception.
         */
        public function testGetOddNumbersThrowsAnException() {
            $this->expectExceptionMessage('The provided array contains non-numeric values!');
            $this->assertEquals([1], $this->numericListManipulator->getOddNumbers([2, false, 1]));
        }

        /**
         * Test if the odd numbers of the positive numeric list are being returned.
         */
        public function testGetOddNumbersFromPostiveNumericList() {
            $this->assertEquals([3, 1], $this->numericListManipulator->getOddNumbers([2, 3, 1, 4]));
        }

        /**
         * Test if the odd numbers of the negative numeric list are being returned.
         */
        public function testGetOddNumbersFromNegativeNumericList() {
            $this->assertEquals([-3, -1], $this->numericListManipulator->getOddNumbers([-2, -3, -1, -4]));
        }

        /**
         * Test if the odd numbers of the mixed numeric list are being returned.
         */
        public function testGetOddNumbersFromMixedNumericList() {
            $this->assertEquals([3, -1], $this->numericListManipulator->getOddNumbers([-2, 3, -1, -4]));
        }

        /**
         * Test if the odd numbers of the mixed numeric list with zero values are being returned.
         */
        public function testGetOddNumbersFromMixedNumericListWithZeroValues() {
            $this->assertEquals([3, -1], $this->numericListManipulator->getOddNumbers([-2, 0, 3, -1, -4]));
        }

        /**
         * Test if an empty array is returned when passing a empty list to the getOddNumbers().
         */
        public function testGetOddNumbersFromEmptyNumericList() {
            $this->assertEquals([], $this->numericListManipulator->getOddNumbers([]));
        }
    }
?>