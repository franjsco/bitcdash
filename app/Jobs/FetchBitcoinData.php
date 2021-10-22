<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\BitcoinData;
use App\Models\BitcoinPrice;


class FetchBitcoinData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $extractionId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($extractionId)
    {
        $this->extractionId = $extractionId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $bitcoinData = new BitcoinData();

        $data = $bitcoinData->getCurrentData();

        $currencies = array_keys($data['current_price']);
        
        $dataWithSeparateCurrencies = array_map(function ($currency) use($data) {
            return [
                'currency' => $currency,
                'price' => $data['current_price'][$currency],
                'market_cap' => $data['market_cap'][$currency],
                'total_volume' => $data['total_volume'][$currency],
                'high_24h' => $data['high_24h'][$currency],
                'low_24h' => $data['high_24h'][$currency],
                'price_change_percentage_24h' => $data['price_change_percentage_24h'],
                'price_change_percentage_7d' => $data['price_change_percentage_7d'],
                'price_change_percentage_14d' => $data['price_change_percentage_14d'],
                'price_change_percentage_30d' => $data['price_change_percentage_30d'],
                'price_change_percentage_60d' => $data['price_change_percentage_60d'],
                'price_change_percentage_200d' => $data['price_change_percentage_200d'],
                'price_change_percentage_1y' => $data['price_change_percentage_1y'],
                'market_cap_change_percentage_24h' => $data['market_cap_change_percentage_24h'],
                'extraction_id' => $this->extractionId
                //'last_upd_from_api' => $data['last_updated']
            ];
        }, $currencies);

        foreach ($dataWithSeparateCurrencies as $dataCurrency) {
            BitcoinPrice::create($dataCurrency);
        }
    }
}