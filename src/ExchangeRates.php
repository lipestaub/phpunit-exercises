<?php
    require_once './services/ExchangeRatesAPI.php';

    class ExchangeRates {
        private ExchangeRatesAPI $api;
        public ?int $userId; 

        public function __construct(?int $userId = null) {
            $this->api = new ExchangeRatesAPI();
            $this->userId = $userId;
        }

        public function __clone() {
            $this->userId = 0;
        }

        /**
         * Returns the EUR rate for BRL
         * 
         * @return int|float
         */
        public function getEURRateForBRL(): int|float {
            return $this->api->getLatestBRLRateForCurrencyByCurrencyCode('EUR');
        }

        /**
         * Returns the USD rate for BRL
         * 
         * @return int|float
         */
        public function getUSDRateForBRL(): int|float {
            return $this->api->getLatestBRLRateForCurrencyByCurrencyCode('USD');
        }

        /**
         * Returns the conversion from BRL to EUR
         * 
         * @param $valueBRL The value that you want to convert.
         * @param $rateEUR The EUR rate for BRL.
         * @return int|float
         */
        public function convertBRLtoEUR(int|float $valueBRL, int|float $rateEUR): int|float {
            return $valueBRL / $rateEUR;
        }

        /**
         * Returns the conversion from EUR to BRL
         * 
         * @param $valueEUR The value that you want to convert.
         * @param $rateEUR The EUR rate for BRL.
         * @return int|float
         */
        public function convertEURtoBRL(int|float $valueEUR, int|float $rateEUR): int|float {
            return $valueEUR * $rateEUR;
        }

        /**
         * Returns the conversion from BRL to USD
         * 
         * @param $valueBRL The value that you want to convert.
         * @param $rateUSD The EUR rate for USD.
         * @return int|float
         */
        public function convertBRLtoUSD(int|float $valueBRL, int|float $rateUSD): int|float {
            return $valueBRL / $rateUSD;
        }

        /**
         * Returns the conversion from USD to BRL
         * 
         * @param $valueUSD The value that you want to convert.
         * @param $rateUSD The EUR rate for BRL.
         * @return int|float
         */
        public function convertUSDtoBRL(int|float $valueUSD, int|float $rateUSD): int|float {
            return $valueUSD * $rateUSD;
        }
    }
?>