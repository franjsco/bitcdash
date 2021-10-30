<?php

namespace App\Console\Commands;

use App\Jobs\FetchBitcoinData;
use App\Jobs\FetchFeeData;
use App\Jobs\FetchSentimentData;
use App\Models\Extraction;
use Illuminate\Bus\Batch;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch (price, fee, sentiment) data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $extractionId = Str::uuid();
        
        $batch = Bus::batch([
            new FetchBitcoinData($extractionId),
            new FetchSentimentData($extractionId),
            new FetchFeeData($extractionId)
        ])->then(function(Batch $batch) use ($extractionId) {
            // TODO: effettuare inserimento nella tabella estrazioni
            Extraction::create([
                "extraction_id" => $extractionId
            ]);
        })->catch(function (Batch $batch) {
            // TODO: gestire errori
            Log::error('Extraction failed');
        })->dispatch(); 
    }
}
