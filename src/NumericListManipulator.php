<?php
    class NumericListManipulator {
        /**
         * Returns the sum of the array elements.
         * 
         * @param $numericList List of the elements to sum.
         * @return array
         */
        public function sum(array $numericList): int|float {
            $this->validateNumericList($numericList);

            return array_sum($numericList);
        }

        /**
         * Returns the bigger element of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getBiggerNumber(array $numericList): int|float {
            $this->validateNumericList($numericList);

            return count($numericList) >= 1 ? max($numericList) : 0;
        }

        /**
         * Returns the smaller element of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getSmallerNumber(array $numericList): float {
            $this->validateNumericList($numericList);

            return count($numericList) >= 1 ? min($numericList) : 0;
        }

        /**
         * Returns the elements of the array in ascending order.
         * 
         * @param $numericList Array to order.
         * @return array
         */
        public function getAscendingNumericList(array $numericList): array {
            $this->validateNumericList($numericList);

            asort($numericList);

            return count($numericList) >= 1 ? array_values($numericList) : [];
        }

        /**
         * Returns the elements of the array in descending order.
         * 
         * @param $numericList Array to order.
         * @return array
         */
        public function getDescendingNumericList(array $numericList): array {
            $this->validateNumericList($numericList);

            arsort($numericList);

            return count($numericList) >= 1 ? array_values($numericList) : [];
        }

        /**
         * Returns the even elements of the array.
         * 
         * @param $numericList Array to look through.
         * @return array
         */
        public function getEvenNumbers(array $numericList): array {
            $this->validateNumericList($numericList);

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
            $this->validateNumericList($numericList);

            return array_values(array_filter($numericList, function($number) {
                return ($number % 2) !== 0;
            }));
        }

        /**
         * Throws an exception if the provided array contains non-numeric values.
         * 
         * @param $numericList Array to look through.
         * @throws Exception if the array contains non-numeric values.
         * @return void
         */
        private function validateNumericList(array $numericList): void {
            foreach ($numericList as $element) {
                if (!is_numeric($element)) {
                    throw new Exception('The provided array contains non-numeric values!');
                }
            }
        }
    }
?>