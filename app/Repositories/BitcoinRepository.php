<?php

namespace App\Repositories;

use DB;
use Config;
class BitcoinRepository
{
    /**
     * @param string $uuid
     * @return object
     */
    public static function getInformationByExtractionId(string $uuid, string $currency)
    {
        if (!in_array($currency, array_map(function ($currency) {
            return $currency["code"];
        }, Config::get('currencies')))) return;

        return DB::table('bitcoin_prices')
            ->join('sentiments', 'bitcoin_prices.extraction_id', '=', 'sentiments.extraction_id')
            ->join('fees', 'bitcoin_prices.extraction_id', '=', 'fees.extraction_id')
            ->where('bitcoin_prices.extraction_id', '=', $uuid)
            ->where('bitcoin_prices.currency', '=', $currency)
            ->first();
    }
}