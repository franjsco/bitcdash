<?php

namespace App\Services;

use Franjsco\CryptoFearGreedIndex\Client;

class SentimentData
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function getSentimentData()
    {
        return $this->client->getData();
    }
}