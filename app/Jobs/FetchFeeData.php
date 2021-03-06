<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Api\FeeAPI;
use App\Models\Fee;
use Illuminate\Bus\Batchable;

class FetchFeeData implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
        $feesData = new FeeAPI();

        $data = $feesData->getRecommendedFees();

        $dataPrep = [
            'fastest_fee' => $data['fastestFee'],
            'half_hour_fee' => $data['halfHourFee'],
            'hour_fee' => $data['hourFee'],
            'extraction_id' => $this->extractionId,
        ];

        Fee::create($dataPrep);
    }
}
