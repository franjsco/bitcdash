<?php

namespace App\Repositories;

use App\Models\Extraction;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BitcoinRepository
{
    /**
     * @param string $uuid
     * @return object
     */
    public static function getInformationByExtractionId(string $uuid)
    {
        return DB::table('bitcoin_prices')
            ->join('sentiments', 'bitcoin_prices.extraction_id', '=', 'sentiments.extraction_id')
            ->join('fees', 'bitcoin_prices.extraction_id', '=', 'fees.extraction_id')
            ->first();
    }
}