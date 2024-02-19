<?php
    class ExchangeRatesAPI {
        public function getLatestBRLRateForCurrencyByCurrencyCode(string $currencyCode): int|float {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://open.er-api.com/v6/latest/' . $currencyCode,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_RETURNTRANSFER => true
            ]);

            $response = curl_exec($curl);
            $decoded = json_decode($response, true);

            return $decoded['rates']['BRL'];
        }
    }
?>