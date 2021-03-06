<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Api\SentimentAPI;
use App\Models\Sentiment;
use Illuminate\Bus\Batchable;
use Illuminate\Support\Facades\Log;

class FetchSentimentData implements ShouldQueue
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
        $sentimentData = new SentimentAPI();

        $data = $sentimentData->getSentiment();

        $dataPrep = [
            'value' => $data['value'],
            'value_classification' => $data['value_classification'],
            //'last_upd_api' => $data['timestamp'],
            'extraction_id' => $this->extractionId,
        ];

        Sentiment::create($dataPrep);
    }
}
