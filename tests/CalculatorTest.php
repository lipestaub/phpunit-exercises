<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/Calculator.php';

    class CalculatorTest extends TestCase {
        private Calculator $calculator;

        public function setUp(): void {
            $this->calculator = new Calculator();
        }

        /**
         * Test if passing a invalid value as first parameter to the sum function throws an exception.
         */
        public function testSumThrowsAnExceptionFirstParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(3, $this->calculator->sum(true, 3));
        }

        /**
         * Test if passing a invalid value as second parameter to the sum function throws an exception.
         */
        public function testSumThrowsAnExceptionSecondParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(5, $this->calculator->sum(5, 'aaa'));
        }

        /**
         * Test if the sum of two positive integer numbers returns the expected result.
         */
        public function testPositiveIntegersNumbersSum() {
            $this->assertEquals(5, $this->calculator->sum(2, 3));
        }

        /**
         * Test if the sum of two positive float numbers returns the expected result.
         */
        public function testPositiveFloatNumbersSum() {
            $this->assertEquals(5.5, $this->calculator->sum(2.4, 3.1));
        }

        /**
         * Test if the sum of two negative integer numbers returns the expected result.
         */
        public function testNegativeIntegersNumbersSum() {
            $this->assertEquals(-4, $this->calculator->sum(-3, -1));
        }

        /**
         * Test if the sum of two negative float numbers returns the expected result.
         */
        public function testNegativeFloatNumbersSum() {
            $this->assertEquals(-4.2, $this->calculator->sum(-3.1, -1.1));
        }

        /**
         * Test if the sum of a positive integer number and a negative integer number returns the expected result.
         */
        public function testPositiveAndNegativeIntegerNumbersSum() {
            $this->assertEquals(4, $this->calculator->sum(5, -1));
        }

        /**
         * Test if the sum of a positive float number and a negative float number returns the expected result.
         */
        public function testPositiveAndNegativeFloatNumbersSum() {
            $this->assertEquals(4.1, $this->calculator->sum(5.5, -1.4));
        }

        /**
         * Test if the sum of a positive integer number and zero returns the expected result.
         */
        public function testPositiveIntegerNumberAndZeroSum() {
            $this->assertEquals(5, $this->calculator->sum(5, 0));
        }

        /**
         * Test if the sum of a positive float number and zero returns the expected result.
         */
        public function testPositiveFloatNumberAndZeroSum() {
            $this->assertEquals(5.0, $this->calculator->sum(5.0, 0));
        }

        /**
         * Test if the sum of a negative integer number and zero returns the expected result.
         */
        public function testNegativeIntegerNumberAndZeroSum() {
            $this->assertEquals(-3, $this->calculator->sum(-3, 0));
        }

        /**
         * Test if the sum of a negative float number and zero returns the expected result.
         */
        public function testNegativeFloatNumberAndZeroSum() {
            $this->assertEquals(-3.2, $this->calculator->sum(-3.2, 0));
        }

        /**
         * Test if the sum of a positive integer number and a positive float number returns the expected result.
         */
        public function testPositiveIntegerNumberAndPositiveFloatNumberSum() {
            $this->assertEquals(8.3, $this->calculator->sum(5, 3.3));
        }

        /**
         * Test if the sum of a negative integer number and a negative float number returns the expected result.
         */
        public function testNegativeIntegerNumberAndNegativeFloatNumberSum() {
            $this->assertEquals(-8.3, $this->calculator->sum(-5, -3.3));
        }

        /**
         * Test if passing a invalid value as first parameter to the subtract function throws an exception.
         */
        public function testSubtractThrowsAnExceptionFirstParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(3, $this->calculator->subtract(true, 3));
        }

        /**
         * Test if passing a invalid value as second parameter to the subtract function throws an exception.
         */
        public function testSubtractThrowsAnExceptionSecondParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(5, $this->calculator->subtract(5, 'aaa'));
        }

        /**
         * Test if the subtraction of two positive integer numbers returns the expected result.
         */
        public function testPositiveIntegersNumbersSubtraction() {
            $this->assertEquals(3, $this->calculator->subtract(6, 3));
        }

        /**
         * Test if the subtraction of two positive float numbers returns the expected result.
         */
        public function testPositiveFloatNumbersSubtraction() {
            $this->assertEquals(4.7, $this->calculator->subtract(7.8, 3.1));
        }

        /**
         * Test if the subtraction of two negative integer numbers returns the expected result.
         */
        public function testNegativeIntegersNumbersSubtraction() {
            $this->assertEquals(-5, $this->calculator->subtract(-6, -1));
        }

        /**
         * Test if the subtraction of two negative float numbers returns the expected result.
         */
        public function testNegativeFloatNumbersSubtraction() {
            $this->assertEquals(-2.0, $this->calculator->subtract(-3.1, -1.1));
        }

        /**
         * Test if the subtraction of a positive integer number and a negative integer number returns the expected result.
         */
        public function testPositiveAndNegativeIntegerNumbersSubtraction() {
            $this->assertEquals(6, $this->calculator->subtract(5, -1));
        }

        /**
         * Test if the subtraction of a positive float number and a negative float number returns the expected result.
         */
        public function testPositiveAndNegativeFloatNumbersSubtraction() {
            $this->assertEquals(6.9, $this->calculator->subtract(5.5, -1.4));
        }

        /**
         * Test if the subtraction of a positive integer number and zero returns the expected result.
         */
        public function testPositiveIntegerNumberAndZeroSubtraction() {
            $this->assertEquals(5, $this->calculator->subtract(5, 0));
        }

        /**
         * Test if the subtraction of a positive float number and zero returns the expected result.
         */
        public function testPositiveFloatNumberAndZeroSubtraction() {
            $this->assertEquals(5.0, $this->calculator->subtract(5.0, 0));
        }

        /**
         * Test if the subtraction of a negative integer number and zero returns the expected result.
         */
        public function testNegativeIntegerNumberAndZeroSubtraction() {
            $this->assertEquals(-3, $this->calculator->subtract(-3, 0));
        }

        /**
         * Test if the subtraction of a negative float number and zero returns the expected result.
         */
        public function testNegativeFloatNumberAndZeroSubtraction() {
            $this->assertEquals(-3.2, $this->calculator->subtract(-3.2, 0));
        }

        /**
         * Test if the subtraction of a positive integer number and a positive float number returns the expected result.
         */
        public function testPositiveIntegerNumberAndPositiveFloatNumberSubtraction() {
            $this->assertEquals(1.7, $this->calculator->subtract(5, 3.3));
        }

        /**
         * Test if the subtraction of a negative integer number and a negative float number returns the expected result.
         */
        public function testNegativeIntegerNumberAndNegativeFloatNumberSubtraction() {
            $this->assertEquals(-1.7, $this->calculator->subtract(-5, -3.3));
        }

        /**
         * Test if passing a invalid value as first parameter to the multiply function throws an exception.
         */
        public function testMultiplyThrowsAnExceptionFirstParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(3, $this->calculator->multiply(true, 3));
        }

        /**
         * Test if passing a invalid value as second parameter to the multiply function throws an exception.
         */
        public function testMultiplyThrowsAnExceptionSecondParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(5, $this->calculator->multiply(5, 'aaa'));
        }

        /**
         * Test if the multiplication of two positive integer numbers returns the expected result.
         */
        public function testPositiveIntegersNumbersMultiplication() {
            $this->assertEquals(18, $this->calculator->multiply(6, 3));
        }

        /**
         * Test if the multiplication of two positive float numbers returns the expected result.
         */
        public function testPositiveFloatNumbersMultiplication() {
            $this->assertEquals(16.12, $this->calculator->multiply(5.2, 3.1));
        }

        /**
         * Test if the multiplication of two negative integer numbers returns the expected result.
         */
        public function testNegativeIntegersNumbersMultiplication() {
            $this->assertEquals(6, $this->calculator->multiply(-6, -1));
        }

        /**
         * Test if the multiplication of two negative float numbers returns the expected result.
         */
        public function testNegativeFloatNumbersMultiplication() {
            $this->assertEquals(3.41, $this->calculator->multiply(-3.1, -1.1));
        }

        /**
         * Test if the multiplication of a positive integer number and a negative integer number returns the expected result.
         */
        public function testPositiveAndNegativeIntegerNumbersMultiplication() {
            $this->assertEquals(-5, $this->calculator->multiply(5, -1));
        }

        /**
         * Test if the multiplication of a positive float number and a negative float number returns the expected result.
         */
        public function testPositiveAndNegativeFloatNumbersMultiplication() {
            $this->assertEquals(-7.56, $this->calculator->multiply(5.4, -1.4));
        }

        /**
         * Test if the multiplication of a positive integer number and zero returns the expected result.
         */
        public function testPositiveIntegerNumberAndZeroMultiplication() {
            $this->assertEquals(0, $this->calculator->multiply(5, 0));
        }

        /**
         * Test if the multiplication of a positive float number and zero returns the expected result.
         */
        public function testPositiveFloatNumberAndZeroMultiplication() {
            $this->assertEquals(0.0, $this->calculator->multiply(5.0, 0));
        }

        /**
         * Test if the multiplication of a negative integer number and zero returns the expected result.
         */
        public function testNegativeIntegerNumberAndZeroMultiplication() {
            $this->assertEquals(0, $this->calculator->multiply(-3, 0));
        }

        /**
         * Test if the multiplication of a negative float number and zero returns the expected result.
         */
        public function testNegativeFloatNumberAndZeroMultiplication() {
            $this->assertEquals(0.0, $this->calculator->multiply(-3.2, 0));
        }

        /**
         * Test if the multiplication of a positive integer number and a positive float number returns the expected result.
         */
        public function testPositiveIntegerNumberAndPositiveFloatNumberMultiplication() {
            $this->assertEquals(16.5, $this->calculator->multiply(5, 3.3));
        }

        /**
         * Test if the multiplication of a negative integer number and a negative float number returns the expected result.
         */
        public function testNegativeIntegerNumberAndNegativeFloatNumberMultiplication() {
            $this->assertEquals(16.5, $this->calculator->multiply(-5, -3.3));
        }

        /**
         * Test if passing a invalid value as first parameter to the divide function throws an exception.
         */
        public function testDivideThrowsAnExceptionFirstParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(3, $this->calculator->divide(true, 3));
        }

        /**
         * Test if passing a invalid value as second parameter to the divide function throws an exception.
         */
        public function testDivideThrowsAnExceptionSecondParameter() {
            $this->expectExceptionMessage('A provided element is not numeric!');
            $this->assertEquals(5, $this->calculator->divide(5, 'aaa'));
        }

        /**
         * Test if passing zero as second parameter to the divide function throws an exception.
         */
        public function testDivideThrowsAnExceptionSecondParameterIsZero() {
            $this->expectExceptionMessage('The second element provided must be different than 0!');
            $this->assertEquals(0, $this->calculator->divide(5, 0));
        }

        /**
         * Test if the division of two positive integer numbers returns the expected result.
         */
        public function testPositiveIntegersNumbersDivision() {
            $this->assertEquals(2, $this->calculator->divide(6, 3));
        }

        /**
         * Test if the division of two positive float numbers returns the expected result.
         */
        public function testPositiveFloatNumbersDivision() {
            $this->assertEquals(4.4, $this->calculator->divide(5.5, 1.25));
        }

        /**
         * Test if the division of two negative integer numbers returns the expected result.
         */
        public function testNegativeIntegersNumbersDivision() {
            $this->assertEquals(6, $this->calculator->divide(-6, -1));
        }

        /**
         * Test if the division of two negative float numbers returns the expected result.
         */
        public function testNegativeFloatNumbersDivision() {
            $this->assertEquals(2.8, $this->calculator->divide(-3.5, -1.25));
        }

        /**
         * Test if the division of a positive integer number and a negative integer number returns the expected result.
         */
        public function testPositiveAndNegativeIntegerNumbersDivision() {
            $this->assertEquals(-5, $this->calculator->divide(5, -1));
        }

        /**
         * Test if the division of a positive float number and a negative float number returns the expected result.
         */
        public function testPositiveAndNegativeFloatNumbersDivision() {
            $this->assertEquals(-4.5, $this->calculator->divide(5.4, -1.2));
        }

        /**
         * Test if the division of zero and a positive integer number returns the expected result.
         */
        public function testZeroAndPositiveIntegerDivision() {
            $this->assertEquals(0, $this->calculator->divide(0, 5));
        }

        /**
         * Test if the division of zero and a positive float number returns the expected result.
         */
        public function testZeroAndPositiveFloatNumberDivision() {
            $this->assertEquals(0.0, $this->calculator->divide(0, 5.3));
        }

        /**
         * Test if the division of zero and a negative integer number returns the expected result.
         */
        public function testZeroAndNegativeIntegerNumberDivision() {
            $this->assertEquals(0, $this->calculator->divide(0, -3));
        }

        /**
         * Test if the division of zero and a negative float number returns the expected result.
         */
        public function testZeroAndNegativeFloatNumberDivision() {
            $this->assertEquals(0.0, $this->calculator->divide(0, -3.2));
        }

        /**
         * Test if the division of a positive integer number and a positive float number returns the expected result.
         */
        public function testPositiveIntegerNumberAndPositiveFloatNumberDivision() {
            $this->assertEquals(1.6, $this->calculator->divide(4, 2.5));
        }

        /**
         * Test if the division of a negative integer number and a negative float number returns the expected result.
         */
        public function testNegativeIntegerNumberAndNegativeFloatNumberDivision() {
            $this->assertEquals(1.5625, $this->calculator->divide(-5, -3.2));
        }
    }
?>