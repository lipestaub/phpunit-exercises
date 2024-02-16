<?php
    class NumericListManipulator {
        /**
         * Returns the sum of the array elements.
         * 
         * @param $numericList List of the elements to sum.
         * @return array
         */
        public function sum(array $numericList): int|float {
            return array_sum($numericList);
        }

        /**
         * Returns the bigger element of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getBiggerNumber(array $numericList): int|float {
            return count($numericList) >= 1 ? max($numericList) : 0;
        }

        /**
         * Returns the smaller element of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getSmallerNumber(array $numericList): float {
            return count($numericList) >= 1 ? min($numericList) : 0;
        }

        /**
         * Returns the elements of the array in ascending order.
         * 
         * @param $numericList Array to order.
         * @return array
         */
        public function getAscendingNumericList(array $numericList): array {
            asort($numericList);

            return array_values($numericList);
        }

        /**
         * Returns the elements of the array in descending order.
         * 
         * @param $numericList Array to order.
         * @return array
         */
        public function getDescendingNumericList(array $numericList): array {
            arsort($numericList);

            return array_values($numericList);
        }

        /**
         * Returns the even elements of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getEvenNumbers(array $numericList): array {
            return array_values(array_filter($numericList, function($number) {
                return ($number % 2) === 0;
            }));
        }

        /**
         * Returns the odd elements of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getOddNumbers(array $numericList): array {
            return array_values(array_filter($numericList, function($number) {
                return ($number % 2) !== 0;
            }));
        }
    }
?>