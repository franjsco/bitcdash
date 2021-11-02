<?php

namespace App\Api;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class BitcoinAPI 
{
    private $client = null;
    private $currencies = [];
    private $coinId = 'bitcoin';

    function __construct($currencies = ['eur', 'usd'])
    {
        $this->currencies = $currencies;
        $this->client = new CoinGeckoClient();
    }


    public function status() 
    {   
        return $this->client->ping();
    }


    public function getPrice()
    {

        return $this->client->simple()->getPrice($this->coinId, implode(',', $this->currencies));
    }


    public function getCurrentData()
    {
        $currentData = $this->client->coins()->getCoin($this->coinId, [
            'tickers' => 'false', 
            'localization' => 'false',
            'market_data' => 'true',
            'community_data' => 'false',
            'developer_data' => 'false'
        ]);

        $marketData = $this->filterFields($currentData);

        return $marketData;
    }


    private function filterFields($currentData) 
    {
        $filteredData = array_filter($currentData['market_data'], function ($key) {
            return in_array($key, [
                'current_price',
                'market_cap',
                'high_24h',
                'low_24h',
                'total_volume',
                'price_change_percentage_24h',
                'price_change_percentage_7d',
                'price_change_percentage_14d',
                'price_change_percentage_30d',
                'price_change_percentage_60d',
                'price_change_percentage_200d',
                'price_change_percentage_1y',
                'market_cap_change_percentage_24h',
                'circulating_supply',
                'total_supply',
                'max_supply',
                'last_updated'
            ]);
        }, ARRAY_FILTER_USE_KEY);

        $filteredData = $this->filterCurrencies($filteredData);

        return $filteredData;
    }


    private function filterCurrencies($data) {
        $currenciesData = array_filter($data, function ($key) {
            return in_array($key, [
                'current_price',
                'market_cap',
                'high_24h',
                'low_24h',
                'total_volume'
            ]);
        }, ARRAY_FILTER_USE_KEY);

        $currenciesData = array_map(function ($currenciesData) {
            return array_filter($currenciesData, function ($key) {
                return in_array($key, $this->currencies);
            }, ARRAY_FILTER_USE_KEY);
        }, $currenciesData);

        return array_merge($data, $currenciesData);
    }
}