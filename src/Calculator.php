<?php
    class Calculator {
        /**
         * Returns the sum of the two elements provided.
         *
         * @param mixed $a The first number of the sum.
         * @param mixed $b The second number of the sum;
         * @return int|float
         */
        public function sum(mixed $a, mixed $b): int|float {
            $this->validateElement($a);
            $this->validateElement($b);

            return round($a + $b, 10);
        }

        /**
         * Returns the subtraction of the two elements provided.
         *
         * @param mixed $a The first number of the subtraction.
         * @param mixed $b The second number of the subtraction;
         * @return int|float
         */
        public function subtract(mixed $a, mixed $b): int|float {
            $this->validateElement($a);
            $this->validateElement($b);

            return round($a - $b, 10);
        }

        /**
         * Returns the multiplication of the two elements provided.
         *
         * @param mixed $a The first number of the multiplication.
         * @param mixed $b The second number of the multiplication;
         * @return int|float
         */
        public function multiply(mixed $a, mixed $b): int|float {
            $this->validateElement($a);
            $this->validateElement($b);

            return round($a * $b, 10);
        }

        /**
         * Returns the multiplication of the two elements provided.
         *
         * @param mixed $a The first number of the multiplication.
         * @param mixed $b The second number of the multiplication;
         * @return int|float
         */
        public function divide(mixed $a, mixed $b): int|float {
            $this->validateElement($a);
            $this->validateElement($b);

            if ($b === 0) {
                throw new Exception('The second element provided must be different than 0!');
            }

            return round($a / $b, 10);
        }

        /**
         * Throws an exception if the element is not numeric.
         * 
         * @param $element Element to validate.
         * @throws Exception if the element is not numeric.
         * @return void
         */
        private function validateElement(mixed $element): void {
            if (!is_numeric($element)) {
                throw new Exception('A provided element is not numeric!');
            }
        }
    }
?>