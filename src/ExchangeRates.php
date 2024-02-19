<?php
    require_once './services/ExchangeRatesAPI.php';

    class ExchangeRates {
        private ExchangeRatesAPI $api;
        public ?int $userId; 

        public function __construct(?int $userId = null) {
            $this->api = new ExchangeRatesAPI();
            $this->userId = $userId;
        }

        public function getEURRateForBRL(): int|float {
            return $this->api->getLatestBRLRateForCurrencyByCurrencyCode('EUR');
        }

        public function getUSDRateForBRL(): int|float {
            return $this->api->getLatestBRLRateForCurrencyByCurrencyCode('USD');
        }

        public function convertBRLtoEUR(int|float $valueBRL, int|float $valueEUR) {
            return $valueBRL / $valueEUR;
        }

        public function convertBRLtoUSD(int|float $valueBRL, int|float $valueUSD) {
            return $valueBRL / $valueUSD;
        }
    }
?>